const app = {
    // === DATA & CONFIG ===
    config: {
        sizes: [
            // Standard weight ranges (Pampers/Huggies avg)
            { size: 'N', min: 0, max: 10, daily: 10, boxSize: 128, costPerBox: 35 },
            { size: '1', min: 10, max: 14, daily: 9, boxSize: 164, costPerBox: 45 },
            { size: '2', min: 14, max: 18, daily: 8, boxSize: 142, costPerBox: 45 },
            { size: '3', min: 18, max: 28, daily: 7, boxSize: 136, costPerBox: 48 },
            { size: '4', min: 28, max: 37, daily: 6, boxSize: 116, costPerBox: 48 },
            { size: '5', min: 37, max: 99, daily: 5, boxSize: 100, costPerBox: 50 }
        ],
        avgCostPerDiaper: 0.28,
        
        // CDC Growth Data (50th Percentile Weight in lbs for Boys)
        // Month: Weight
        growthTable: {
            0: 7.8, 1: 9.9, 2: 12.3, 3: 14.1, 4: 15.4, 5: 16.6, 6: 17.5, 
            7: 18.3, 8: 19.0, 9: 19.6, 10: 20.2, 11: 20.8, 12: 21.3
        }
    },

    brands: {
        'coterie': { 
            name: 'Coterie', 
            url: 'https://coterie.com', 
            subUrl: 'https://coterie.com/subscribe',
            reason: 'The "Rolls Royce" of diapers. Unmatched softness and wicking.',
            bullets: ['Hypoallergenic & fragrance-free', 'High capacity (great for night)', 'Sustainable materials'],
            priceTier: 3 // $$$
        },
        'honest': { 
            name: 'Honest Company', 
            url: 'https://www.amazon.com/s?k=honest+diapers', 
            subUrl: 'https://www.amazon.com/s?k=honest+diapers', // Amazon SNS
            reason: 'Clean ingredients meets adorable style.',
            bullets: ['Plant-based materials', 'Super cute prints', 'Gentle on sensitive skin'],
            priceTier: 2 // $$
        },
        'kirkland': { 
            name: 'Kirkland Signature', 
            url: 'https://www.costco.com/diapers.html', 
            subUrl: 'https://www.costco.com/diapers.html',
            reason: 'The undisputed champion of value (rumored to be made by Huggies).',
            bullets: ['Unbeatable price point', 'Great leak protection', 'Requires Costco membership'],
            priceTier: 1 // $
        },
        'luvs': { 
            name: 'Luvs Pro Level', 
            url: 'https://www.amazon.com/s?k=luvs+diapers', 
            subUrl: 'https://www.amazon.com/s?k=luvs+diapers',
            reason: 'Budget-friendly reliability with Triple Leakguards.',
            bullets: ['Very affordable', 'Nightlock technology', 'Money-back guarantee'],
            priceTier: 1 // $
        },
        'pampers': { 
            name: 'Pampers Swaddlers', 
            url: 'https://www.amazon.com/s?k=pampers+swaddlers', 
            subUrl: 'https://www.amazon.com/s?k=pampers+swaddlers',
            reason: '#1 Hospital choice. Ultra-soft with a BreatheFree liner.',
            bullets: ['Umbilical cord notch (Newborn)', 'Wetness indicator', 'Trusted reliability'],
            priceTier: 2 // $$
        },
        'huggies': { 
            name: 'Huggies Overnites', 
            url: 'https://www.amazon.com/s?k=huggies+overnites', 
            subUrl: 'https://www.amazon.com/s?k=huggies+overnites',
            reason: 'Designed for heavy wetters and long stretches of sleep.',
            bullets: ['Double Grip strips', 'DryTouch liner', 'Up to 12 hours protection'],
            priceTier: 2 // $$
        },
        'dyper': { 
            name: 'Dyper', 
            url: 'https://dyper.com', 
            subUrl: 'https://dyper.com/subscribe',
            reason: 'Eco-conscious bamboo diapers that can be composted.',
            bullets: ['Bamboo viscose fibers', 'Unprinted (no ink)', 'REDYPER compost service avail'],
            priceTier: 3 // $$$
        }
    },

    state: {
        results: null
    },

    // === UI CONTROLS ===
    init: function() {
        const tabs = document.querySelectorAll('.tabs');
        M.Tabs.init(tabs, {});
    },

    toggleBabyInput: function() {
        const status = document.querySelector('input[name="baby-status"]:checked').value;
        const bornDiv = document.getElementById('born-inputs');
        const expectingDiv = document.getElementById('expecting-inputs');

        if (status === 'born') {
            bornDiv.classList.remove('hidden');
            expectingDiv.classList.add('hidden');
        } else {
            bornDiv.classList.add('hidden');
            expectingDiv.classList.remove('hidden');
        }
    },

    // === PHASE 2: ALGORITHM ===
    getProjectedWeight: function(ageInMonths) {
        // Linear interpolation between months from CDC table
        const lowerMonth = Math.floor(ageInMonths);
        const upperMonth = Math.ceil(ageInMonths);
        
        if (lowerMonth >= 12) return this.config.growthTable[12]; // Cap at 1 year data for now
        
        const lowerWeight = this.config.growthTable[lowerMonth];
        const upperWeight = this.config.growthTable[upperMonth];
        const fraction = ageInMonths - lowerMonth;
        
        return lowerWeight + (upperWeight - lowerWeight) * fraction;
    },

    calculate: function() {
        // 1. Get Inputs
        const status = document.querySelector('input[name="baby-status"]:checked').value;
        const numBabies = parseInt(document.querySelector('input[name="baby-count"]:checked').value) || 1;
        
        let currentAgeMo = 0;
        let startWeight = this.config.growthTable[0]; 

        if (status === 'born') {
            currentAgeMo = parseFloat(document.getElementById('baby-age').value) || 0;
            const weightInput = parseFloat(document.getElementById('current-weight').value);
            // If user provides weight, calculate offset from 'average' to personalize curve
            if (weightInput) {
                const avgAtAge = this.getProjectedWeight(currentAgeMo);
                this.weightOffset = weightInput - avgAtAge; 
            } else {
                this.weightOffset = 0;
            }
        } else {
            this.weightOffset = 0;
        }

        // 2. Simulate Remaining Year One
        // We simulate from currentAgeMo up to 12 months
        let totalDiapers = 0;
        let weeklyDiapers = 0;
        let sizeBuckets = {}; 
        let totalCost = 0;

        // Simulation loop (Week by Week)
        // 52 weeks in a year -> approx 4.33 weeks per month
        const weeksRemaining = Math.floor((12 - currentAgeMo) * 4.33);

        for (let i = 0; i < weeksRemaining; i++) {
            // Calculate current weight
            const projectedAvg = this.getProjectedWeight(currentAgeMo);
            const currentWeight = projectedAvg + this.weightOffset;

            // Find Size
            let sizeObj = this.config.sizes.find(s => currentWeight >= s.min && currentWeight < s.max) 
                          || this.config.sizes[this.config.sizes.length - 1];

            // Daily Usage Decay
            // 0-1mo: 10, 1-3mo: 9, 3-6mo: 8, 6-9mo: 7, 9-12mo: 6
            let daily = 6;
            if (currentAgeMo < 1) daily = 10;
            else if (currentAgeMo < 3) daily = 9;
            else if (currentAgeMo < 6) daily = 8;
            else if (currentAgeMo < 9) daily = 7;

            // Totals
            let weeklyCount = daily * 7 * numBabies;
            totalDiapers += weeklyCount;
            if (i === 0) weeklyDiapers = weeklyCount;

            // Cost Accumulation
            totalCost += weeklyCount * this.config.avgCostPerDiaper;

            // Buckets
            if (!sizeBuckets[sizeObj.size]) sizeBuckets[sizeObj.size] = 0;
            sizeBuckets[sizeObj.size] += weeklyCount;

            // Increment Time
            currentAgeMo += 0.23; // ~1 week in months
        }

        this.state.results = {
            total: totalDiapers,
            weekly: weeklyDiapers,
            cost: totalCost,
            breakdown: sizeBuckets,
            numBabies: numBabies
        };

        this.renderResults();
        this.scrollTo('results-section');
    },

    renderResults: function() {
        const r = this.state.results;
        
        // 1. Stats
        document.getElementById('weekly-count').innerText = Math.round(r.weekly);
        document.getElementById('year-count').innerText = r.total.toLocaleString();
        document.getElementById('bridge-total').innerText = r.total.toLocaleString();
        document.getElementById('cost-est').innerText = '$' + Math.floor(r.cost).toLocaleString();

        // 2. Stockpile List & Savings Logic
        const stockEl = document.getElementById('stockpile-list');
        stockEl.innerHTML = '';
        
        // Multiples Savings Logic
        let bulkSavingsHtml = '';
        if (r.numBabies > 1) {
            // Assume 15% savings for bulk/subscription on this volume
            const savings = Math.floor(r.cost * 0.15);
            bulkSavingsHtml = `
                <div class="card-panel orange lighten-5 z-depth-0" style="margin: 0 0 20px 0; border: 1px solid #ffe0b2;">
                    <span class="orange-text text-darken-3">
                        <i class="material-icons left">savings</i>
                        <strong>Twin/Triplet Tip:</strong> Buying in bulk could save you <strong>$${savings}</strong> this year!
                    </span>
                </div>
            `;
        }
        
        // Render Stockpile
        let html = bulkSavingsHtml;
        for (const [size, count] of Object.entries(r.breakdown)) {
            const sizeInfo = this.config.sizes.find(s => s.size === size);
            const boxes = Math.ceil(count / sizeInfo.boxSize);
            
            html += `
                <div class="stockpile-item">
                    <div class="stock-size">Size ${size}</div>
                    <div class="stock-qty">${Math.round(count).toLocaleString()} diapers</div>
                    <div class="stock-boxes">~${boxes} boxes</div>
                </div>
            `;
        }
        stockEl.innerHTML = html;

        // 3. Schedule Table
        const schedEl = document.getElementById('schedule-body');
        schedEl.innerHTML = '';
        for (const [size, count] of Object.entries(r.breakdown)) {
            const sizeCfg = this.config.sizes.find(s => s.size === size);
            const daily = sizeCfg ? sizeCfg.daily : 0;
            
            const ageRange = size === 'N' ? '0-1 mo' : 
                             size === '1' ? '1-3 mo' : 
                             size === '2' ? '3-5 mo' : 
                             size === '3' ? '5-9 mo' : 
                             size === '4' ? '9-12 mo' : '12+ mo';
            
            const row = `
                <tr>
                    <td>Size ${size}</td>
                    <td>${ageRange}</td>
                    <td>${daily * r.numBabies} / day</td> 
                </tr>
            `;
            schedEl.innerHTML += row;
        }

        document.getElementById('results-section').classList.remove('hidden');
    },

    // === PHASE 2 & 3: SURVEY & REC ===
    startSurvey: function() {
        document.getElementById('survey-section').classList.remove('hidden');
        this.scrollTo('survey-section');
    },

    getRecommendation: function() {
        // Logic Mapping
        const skin = document.querySelector('input[name="s-skin"]:checked').value;
        const budget = document.querySelector('input[name="s-budget"]:checked').value;
        const activity = document.querySelector('input[name="s-activity"]:checked').value;

        let brandKey = 'pampers'; // default

        // Logic Tree
        if (skin === 'sensitive') {
            if (budget === 'premium') brandKey = 'coterie';
            else brandKey = 'honest';
        } 
        else if (budget === 'value') {
            if (activity === 'active') brandKey = 'luvs';
            else brandKey = 'kirkland';
        }
        else if (activity === 'night') {
            brandKey = 'huggies';
        }
        else {
            // Default mid-range
            brandKey = 'pampers';
        }

        // Render Rec
        const brand = this.brands[brandKey];
        document.getElementById('rec-name').innerText = brand.name;
        document.getElementById('rec-reason').innerText = brand.reason;
        
        // Affiliate Links
        document.getElementById('rec-link').href = brand.url;
        document.getElementById('sub-link').href = brand.subUrl;
        
        // Dynamic Bullets
        const bulletList = document.getElementById('rec-bullets');
        bulletList.innerHTML = '';
        brand.bullets.forEach(b => {
            bulletList.innerHTML += `<li>${b}</li>`;
        });

        // Subscription Savings Calc (Phase 4 Logic)
        if (this.state.results && this.state.results.cost) {
            // Estimated 15% savings with Subscribe & Save / Bulk
            // If premium brand, savings might be higher absolute value
            const baseCost = this.state.results.cost;
            let savingPct = 0.05; // default 5% (Amazon basic SNS)
            
            if (brandKey === 'coterie' || brandKey === 'dyper') savingPct = 0.10; // DTC often 10-15%
            if (brandKey === 'kirkland') savingPct = 0.20; // Implicit bulk savings vs standard
            if (this.state.results.numBabies > 1) savingPct += 0.05; // Extra incentives usually found

            const yearlySavings = Math.floor(baseCost * savingPct);
            
            if (yearlySavings > 20) {
                document.getElementById('sub-savings-amt').innerText = yearlySavings;
                document.getElementById('sub-savings-box').classList.remove('hidden');
            } else {
                document.getElementById('sub-savings-box').classList.add('hidden');
            }
        }

        document.getElementById('recommendation-section').classList.remove('hidden');
        this.scrollTo('recommendation-section');
    },

    // Helper
    scrollTo: function(id) {
        document.getElementById(id).scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
};

// Initialize App
document.addEventListener('DOMContentLoaded', function() {
    app.init();
});
