document.addEventListener('DOMContentLoaded', function() {
    // Academic statistics data
    const data = {
        totalAppeared: 1248,
        totalPassed: 1186,
        passPercentage: 95.03,
        distinction: 426,
        starMarks: 187,
        firstDivision: 742
    };
    
    // Get DOM elements
    const totalAppearedEl = document.getElementById('totalAppeared');
    const totalPassedEl = document.getElementById('totalPassed');
    const passPercentageEl = document.getElementById('passPercentage');
    const distinctionEl = document.getElementById('distinction');
    const starMarksEl = document.getElementById('starMarks');
    const firstDivisionEl = document.getElementById('firstDivision');
    const statsGrid = document.querySelector('.academic-stats-grid');
    
    // Show the grid with a slight delay
    setTimeout(() => {
        statsGrid.classList.add('loaded');
    }, 300);
    
    // Animate the numbers counting up
    function animateValue(element, start, end, duration, isPercentage = false) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const value = Math.floor(progress * (end - start) + start);
            
            if (isPercentage) {
                element.textContent = (progress * end).toFixed(2) + '%';
            } else {
                element.textContent = value.toLocaleString();
            }
            
            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                if (isPercentage) {
                    element.textContent = end.toFixed(2) + '%';
                } else {
                    element.textContent = end.toLocaleString();
                }
            }
        };
        window.requestAnimationFrame(step);
    }
    
    // Start animations with a slight delay
    setTimeout(() => {
        animateValue(totalAppearedEl, 0, data.totalAppeared, 2000);
        animateValue(totalPassedEl, 0, data.totalPassed, 2000);
        animateValue(passPercentageEl, 0, data.passPercentage, 2000, true);
        animateValue(distinctionEl, 0, data.distinction, 2000);
        animateValue(starMarksEl, 0, data.starMarks, 2000);
        animateValue(firstDivisionEl, 0, data.firstDivision, 2000);
    }, 500);
});