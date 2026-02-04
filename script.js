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
            url: 'https://www.amazon.com/s?k=coterie+diapers&tag=diaperplann0e-20', 
            subUrl: 'https://www.amazon.com/s?k=coterie+diapers&tag=diaperplann0e-20',
            sizeUrls: {
                'N': 'https://amzn.to/4rA165Y',
                '1': 'https://amzn.to/4qQi2oC',
                '2': 'https://amzn.to/4avTLhO',
                '3': 'https://amzn.to/4qQhRJY',
                '4': 'https://amzn.to/3NUiyDv',
                '5': 'https://amzn.to/3LPKHer'
            },
            reason: 'The "Rolls Royce" of diapers. Unmatched softness and wicking.',
            bullets: ['Hypoallergenic & fragrance-free', 'High capacity (great for night)', 'Sustainable materials'],
            priceTier: 3 // $$$
        },
        'honest': { 
            name: 'Honest Company', 
            url: 'https://www.amazon.com/s?k=honest+diapers&tag=diaperplann0e-20', 
            subUrl: 'https://www.amazon.com/s?k=honest+diapers&tag=diaperplann0e-20', // Amazon SNS
            sizeUrls: {
                'N': 'https://amzn.to/3ZgMhsJ',
                '1': 'https://amzn.to/4adOGcG',
                '2': 'https://amzn.to/4aanTOu',
                '3': 'https://amzn.to/4rzfo6M',
                '4': 'https://amzn.to/4r50WUk',
                '5': 'https://amzn.to/3NXgsmi',
                '6': 'https://amzn.to/3LQpxgh',
                '7': 'https://amzn.to/4qrxsik'
            },
            reason: 'Clean ingredients meets adorable style.',
            bullets: ['Plant-based materials', 'Super cute prints', 'Gentle on sensitive skin'],
            priceTier: 2 // $$
        },
        'kirkland': { 
            name: 'Kirkland Signature', 
            url: 'https://www.amazon.com/s?k=kirkland+diapers&tag=diaperplann0e-20', 
            subUrl: 'https://www.amazon.com/s?k=kirkland+diapers&tag=diaperplann0e-20',
            sizeUrls: {
                '1': 'https://amzn.to/3NXbTZh',
                '2': 'https://amzn.to/4te7elO',
                '3': 'https://amzn.to/4avgvhZ',
                '4': 'https://amzn.to/4c7oCCv',
                '5': 'https://amzn.to/4ahVYfF',
                '6': 'https://amzn.to/4c6Zn3g'
            },
            reason: 'The undisputed champion of value (rumored to be made by Huggies).',
            bullets: ['Unbeatable price point', 'Great leak protection', 'Requires Costco membership'],
            priceTier: 1 // $
        },
        'luvs': { 
            name: 'Luvs Pro Level', 
            url: 'https://www.amazon.com/s?k=luvs+diapers&tag=diaperplann0e-20', 
            subUrl: 'https://www.amazon.com/s?k=luvs+diapers&tag=diaperplann0e-20',
            sizeUrls: {
                '1': 'https://amzn.to/4kAeO6B',
                '2': 'https://amzn.to/45Kv7r7',
                '3': 'https://amzn.to/4a7mHeM',
                '4': 'https://amzn.to/45JkQvs',
                '5': 'https://amzn.to/4rPPPi3',
                '6': 'https://amzn.to/46x3Etd'
            },
            reason: 'Budget-friendly reliability with Triple Leakguards.',
            bullets: ['Very affordable', 'Nightlock technology', 'Money-back guarantee'],
            priceTier: 1 // $
        },
        'pampers': { 
            name: 'Pampers Swaddlers', 
            url: 'https://www.amazon.com/s?k=pampers+swaddlers&tag=diaperplann0e-20', 
            subUrl: 'https://www.amazon.com/s?k=pampers+swaddlers&tag=diaperplann0e-20',
            sizeUrls: {
                'N': 'https://amzn.to/4thQYjQ',
                '1': 'https://amzn.to/4arv9H3',
                '2': 'https://amzn.to/3Oky2ke',
                '3': 'https://amzn.to/4kd2tom',
                '4': 'https://amzn.to/4kqKtHl',
                '5': 'https://amzn.to/3MdtSKl',
                '6': 'https://amzn.to/3MbRNK7',
                '7': 'https://amzn.to/467W0Wj',
                '8': 'https://amzn.to/45JkN2K'
            },
            reason: '#1 Hospital choice. Ultra-soft with a BreatheFree liner.',
            bullets: ['Umbilical cord notch (Newborn)', 'Wetness indicator', 'Trusted reliability'],
            priceTier: 2 // $$
        },
        'huggies': { 
            name: 'Huggies Overnites', 
            url: 'https://www.amazon.com/s?k=huggies+overnites&tag=diaperplann0e-20', 
            subUrl: 'https://www.amazon.com/s?k=huggies+overnites&tag=diaperplann0e-20',
            sizeUrls: {
                '3': 'https://amzn.to/4kd0a4O',
                '4': 'https://amzn.to/3OmvuSH',
                '5': 'https://amzn.to/3ZcMKMD',
                '6': 'https://amzn.to/4c8D25q',
                '7': 'https://amzn.to/4rxrtt3'
            },
            reason: 'Designed for heavy wetters and long stretches of sleep.',
            bullets: ['Double Grip strips', 'DryTouch liner', 'Up to 12 hours protection'],
            priceTier: 2 // $$
        },
        'dyper': { 
            name: 'Dyper', 
            url: 'https://www.amazon.com/s?k=dyper+diapers&tag=diaperplann0e-20', 
            subUrl: 'https://www.amazon.com/s?k=dyper+diapers&tag=diaperplann0e-20',
            sizeUrls: {
                'N': 'https://amzn.to/3MnpkRJ',
                '1': 'https://amzn.to/4tffu4T',
                '2': 'https://amzn.to/4tgzNyV',
                '3': 'https://amzn.to/46vaY8F',
                '4': 'https://amzn.to/3ZcNQIf',
                '5': 'https://amzn.to/4a7nCvK',
                '6': 'https://amzn.to/4kha99m'
            },
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
        const sizeOrder = ['N', '1', '2', '3', '4', '5', '6', '7', '8']; // Explicit order

        for (const size of sizeOrder) {
            const count = r.breakdown[size];
            if (count > 0) {
                const sizeInfo = this.config.sizes.find(s => s.size === size);
                // Fallback for larger sizes not in config yet but in bucket (unlikely but safe)
                const boxSize = sizeInfo ? sizeInfo.boxSize : 100; 
                const boxes = Math.ceil(count / boxSize);
                
                // Display 'NB' for 'N'
                const displaySize = size === 'N' ? 'NB' : size;

                html += `
                    <div class="stockpile-item">
                        <div class="stock-size">Size ${displaySize}</div>
                        <div class="stock-qty">${Math.round(count).toLocaleString()} diapers</div>
                        <div class="stock-boxes">~${boxes} boxes</div>
                    </div>
                `;
            }
        }
        stockEl.innerHTML = html;

        // 3. Schedule Table
        const schedEl = document.getElementById('schedule-body');
        schedEl.innerHTML = '';
        for (const size of sizeOrder) {
            const count = r.breakdown[size];
            if (count > 0) {
                const sizeCfg = this.config.sizes.find(s => s.size === size);
                const daily = sizeCfg ? sizeCfg.daily : 0;
                
                const displaySize = size === 'N' ? 'NB' : size;

                const ageRange = size === 'N' ? '0-1 mo' : 
                                 size === '1' ? '1-3 mo' : 
                                 size === '2' ? '3-5 mo' : 
                                 size === '3' ? '5-9 mo' : 
                                 size === '4' ? '9-12 mo' : '12+ mo';
                
                const row = `
                    <tr>
                        <td>Size ${displaySize}</td>
                        <td>${ageRange}</td>
                        <td>${daily * r.numBabies} / day</td> 
                    </tr>
                `;
                schedEl.innerHTML += row;
            }
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
        
        // Subscription Link
        document.getElementById('sub-link').href = brand.subUrl;
        
        // Dynamic Bullets
        const bulletList = document.getElementById('rec-bullets');
        bulletList.innerHTML = '';
        brand.bullets.forEach(b => {
            bulletList.innerHTML += `<li>${b}</li>`;
        });

        // --- NEW: Generate Size Grid ---
        const gridEl = document.getElementById('rec-size-grid');
        gridEl.innerHTML = '';

        if (this.state.results && this.state.results.breakdown) {
            // Sort sizes logically (N, 1, 2, 3...)
            const sizeOrder = ['N', '1', '2', '3', '4', '5', '6', '7', '8'];
            
            for (const size of sizeOrder) {
                const count = this.state.results.breakdown[size];
                if (count > 0) {
                    // Determine URL: Specific size link > Generic brand URL
                    let buyUrl = brand.url;
                    if (brand.sizeUrls && brand.sizeUrls[size]) {
                        buyUrl = brand.sizeUrls[size];
                    }

                    const boxes = Math.ceil(count / (this.config.sizes.find(s => s.size === size).boxSize));
                    const displaySize = size === 'N' ? 'NB' : size;

                    const rowHtml = `
                        <div style="display: flex; align-items: center; justify-content: space-between; margin-bottom: 12px; padding-bottom: 12px; border-bottom: 1px solid #e0f2f1;">
                            <div>
                                <span class="teal-text text-darken-2" style="font-weight: 700; font-size: 1.1rem;">Size ${displaySize}</span>
                            </div>
                            <a href="${buyUrl}" target="_blank" class="btn waves-effect waves-light teal lighten-1 btn-small" style="border-radius: 20px;">
                                Buy on Amazon
                            </a>
                        </div>
                    `;
                    gridEl.innerHTML += rowHtml;
                }
            }
        }

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
