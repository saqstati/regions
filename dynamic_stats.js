/**
 * Dynamic Statistics Updater
 * JavaScript client for updating Georgian statistics dynamically
 */

class DynamicStatsUpdater {
    constructor(apiUrl = 'api_stats.php') {
        this.apiUrl = apiUrl;
        this.updateInterval = 60 * 1000; // 1 minute in milliseconds
        this.lastUpdate = null;
        this.data = null;
    }

    /**
     * Fetch latest statistics data
     */
    async fetchData() {
        try {
            console.log('Fetching statistics data...');
            const response = await fetch(this.apiUrl);
            
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            
            const result = await response.json();
            
            if (result.success) {
                this.data = result.data;
                this.lastUpdate = new Date();
                console.log('Statistics data updated successfully', result);
                return this.data;
            } else {
                throw new Error(result.error || 'Failed to fetch data');
            }
        } catch (error) {
            console.error('Error fetching statistics:', error);
            throw error;
        }
    }

    /**
     * Update textbox elements with new data
     */
    updateTextboxes(data = null) {
        const statsData = data || this.data;
        if (!statsData) {
            console.warn('No statistics data available');
            return;
        }

        // Mapping of statistic keys to textbox elements (both desktop and mobile)
        const mappings = {
            'area': { spanClass: 'textboxspan1' },
            'population': { spanClass: 'textboxspan2' },
            'gdp_growth': { spanClass: 'textboxspan3' },
            'gdp_per_capita': { spanClass: 'textboxspan4' },
            'inflation': { spanClass: 'textboxspan5' },
            'unemployment': { spanClass: 'textboxspan6' },
            'businesses': { spanClass: 'textboxspan7' }
        };

        Object.keys(mappings).forEach(key => {
            if (statsData[key]) {
                this.updateTextboxElement(mappings[key], statsData[key]);
            }
        });

        console.log('Textbox elements updated');
    }

    /**
     * Update a single textbox element
     */
    updateTextboxElement(mapping, statData) {
        // Find all span elements with the specified class (both desktop and mobile)
        const spanElements = document.querySelectorAll(`span.${mapping.spanClass}`);
        
        if (spanElements.length === 0) {
            console.warn(`No span elements found for ${mapping.spanClass}`);
            return;
        }

        spanElements.forEach(spanElement => {
            // Update text content based on the language key
            this.updateSingleElement(spanElement, statData);
        });

        console.log(`Updated ${spanElements.length} elements for ${mapping.spanClass}`);
    }

    /**
     * Update a single span element with new data
     */
    updateSingleElement(spanElement, statData) {
        const key = spanElement.getAttribute('key');
        
        // Update content based on the Key attribute
        switch(key) {
            case 'AREAMSR': // Area
                spanElement.textContent = `${statData.title}: ${statData.value}`;
                break;
            case 'POPULMSR': // Population  
                spanElement.textContent = `მოსახლეობა: ${statData.value} ათასი`;
                break;
            case 'GDPMSR': // GDP Growth
                spanElement.textContent = `მშპ-ს რეალური ზრდა: ${statData.value}%`;
                break;
            case 'CURMSR': // GDP per capita
                spanElement.textContent = `მშპ ერთ სულ მოსახლეზე: ${statData.value} აშშ დოლარი`;
                break;
            case 'INFMSR': // Inflation
                spanElement.textContent = `ინფლაცია: ${statData.value}%`;
                break;
            case 'UNEMPMSR': // Unemployment
                spanElement.textContent = `უმუშევრობის დონე: ${statData.value}%`;
                break;
            case 'BUSMSR': // Businesses
                spanElement.textContent = `რეგისტრირებული ეკონომიკური სუბიექტები: ${statData.value}`;
                break;
            default:
                spanElement.textContent = `${statData.title}: ${statData.value}`;
        }

        // Update data-content attribute for tooltips
        if (statData.tooltip) {
            spanElement.setAttribute('data-content', statData.tooltip);
        }
    }

    /**
     * Initialize automatic updates
     */
    startAutoUpdate() {
        // Initial fetch
        this.fetchData().then(data => {
            this.updateTextboxes(data);
        }).catch(error => {
            console.error('Initial data fetch failed:', error);
        });

        // Set up periodic updates
        setInterval(() => {
            this.fetchData().then(data => {
                this.updateTextboxes(data);
            }).catch(error => {
                console.error('Periodic update failed:', error);
            });
        }, this.updateInterval);

        console.log('Auto-update started');
    }

    /**
     * Manual update trigger
     */
    async update() {
        try {
            const data = await this.fetchData();
            this.updateTextboxes(data);
            return data;
        } catch (error) {
            console.error('Manual update failed:', error);
            throw error;
        }
    }

    /**
     * Get current data
     */
    getData() {
        return this.data;
    }

    /**
     * Get last update time
     */
    getLastUpdate() {
        return this.lastUpdate;
    }
}

// Global instance
let dynamicStats = null;

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', function() {
    console.log('Dynamic Stats JavaScript loaded');
    
    // Create global instance
    dynamicStats = new DynamicStatsUpdater();
    
    // Auto-start if textbox elements exist
    const textboxElements = document.querySelector('#textbox') || document.querySelector('#textbox_small_device');
    if (textboxElements) {
        console.log('Textbox elements found, starting auto-update');
        dynamicStats.startAutoUpdate();
    } else {
        console.warn('No textbox elements found - auto-update not started');
    }
});

// Export for use in other scripts
if (typeof module !== 'undefined' && module.exports) {
    module.exports = DynamicStatsUpdater;
}