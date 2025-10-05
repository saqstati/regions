/**
 * Dynamic Statistics Updater
 * JavaScript client for updating Georgian statistics dynamically
 */

class DynamicStatsUpdater {
    constructor(apiUrl = 'api_stats.php') {
        this.apiUrl = apiUrl;
        this.updateInterval = 60 * 60 * 1000; // 1 hour in milliseconds
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

        // Mapping of statistic keys to textbox elements
        const mappings = {
            'area': { id: 'textbox1', spanClass: 'textboxspan1' },
            'population': { id: 'textbox2', spanClass: 'textboxspan2' },
            'gdp_growth': { id: 'textbox3', spanClass: 'textboxspan3' },
            'gdp_per_capita': { id: 'textbox4', spanClass: 'textboxspan4' },
            'inflation': { id: 'textbox5', spanClass: 'textboxspan5' },
            'unemployment': { id: 'textbox6', spanClass: 'textboxspan6' },
            'businesses': { id: 'textbox7', spanClass: 'textboxspan7' }
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
        const textboxElement = document.getElementById(mapping.id);
        if (!textboxElement) {
            console.warn(`Textbox element ${mapping.id} not found`);
            return;
        }

        // Update icon
        const iconImg = textboxElement.querySelector('img.indic-icons');
        if (iconImg && statData.icon) {
            iconImg.src = statData.icon;
        }

        // Update text content
        const spanElement = textboxElement.querySelector(`span.${mapping.spanClass}`);
        if (spanElement) {
            // Preserve the original structure but update the content
            let displayText = '';
            
            // Format display text based on statistic type
            if (mapping.spanClass === 'textboxspan1') { // Area
                displayText = `${statData.title}: ${statData.value}`;
            } else if (mapping.spanClass === 'textboxspan2') { // Population
                displayText = `მოსახლეობა: ${statData.value} ათასი`;
            } else if (mapping.spanClass === 'textboxspan3') { // GDP Growth
                displayText = `მშპ-ს რეალური ზრდა: ${statData.value}%`;
            } else if (mapping.spanClass === 'textboxspan4') { // GDP per capita
                displayText = `მშპ ერთ სულ მოსახლეზე: ${statData.value} აშშ დოლარი`;
            } else if (mapping.spanClass === 'textboxspan5') { // Inflation
                displayText = `ინფლაცია: ${statData.value}%`;
            } else if (mapping.spanClass === 'textboxspan6') { // Unemployment
                displayText = `უმუშევრობის დონე: ${statData.value}%`;
            } else if (mapping.spanClass === 'textboxspan7') { // Businesses
                displayText = `რეგისტრირებული ეკონომიკური სუბიექტები: ${statData.value}`;
            } else {
                displayText = `${statData.title}: ${statData.value}`;
            }

            spanElement.textContent = displayText;

            // Update data-content attribute for tooltips
            if (statData.tooltip) {
                spanElement.setAttribute('data-content', statData.tooltip);
            }
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
    if (document.getElementById('textbox')) {
        console.log('Textbox elements found, starting auto-update');
        dynamicStats.startAutoUpdate();
    }
});

// Export for use in other scripts
if (typeof module !== 'undefined' && module.exports) {
    module.exports = DynamicStatsUpdater;
}