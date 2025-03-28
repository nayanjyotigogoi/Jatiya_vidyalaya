const tabButtons = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.tab-content');

tabButtons.forEach(btn => {
    btn.addEventListener('click', () => {
        tabButtons.forEach(b => b.classList.remove('active'));
        tabContents.forEach(c => c.classList.remove('active'));
        btn.classList.add('active');
        document.getElementById(btn.dataset.tab).classList.add('active');
    });
});

// Search functionality
const tabSection = document.querySelector('.student-grade');
const searchInput = document.getElementById('searchInput');
const clearBtn = document.getElementById('clearSearch');
const searchResults = document.getElementById('searchResults');
const resultContainer = document.getElementById('resultContainer');


searchInput.addEventListener('input', function () {
    const query = this.value.toLowerCase().trim();

    if (query === '') {
        tabSection.style.display = '';
        searchResults.style.display = 'none';
        resultContainer.innerHTML = '';
        return;
    }

    tabSection.style.display = 'none';
    searchResults.style.display = '';

    resultContainer.innerHTML = '';

    document.querySelectorAll('#all tbody tr').forEach(row => { // ✅ Only search "all"
        const rowText = row.innerText.toLowerCase();
        if (rowText.includes(query)) {
            const cells = row.querySelectorAll('td');
            const name = `${cells[0]?.innerText || ''} ${cells[1]?.innerText || ''}`;
            const roll = cells[8]?.innerText || '';
            const section = cells[7]?.innerText || '';
            const marks = cells[9]?.innerText || '';
            const division = cells[10]?.innerText || '';

            const cardHTML = `
                <div class="student-card" style="border-radius: 12px; border: 1px solid #e0e0e0; background-color: #f9f9f9; padding: 20px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);">
                    <h4 style="margin-bottom: 10px; color: #2c3e50;">${name}</h4>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 15px; color: #555;">
                        <li><strong>Roll No:</strong> ${roll}</li>
                        <li><strong>Section:</strong> ${section}</li>
                        <li><strong>Marks:</strong> ${marks}</li>
                        <li><strong>Division:</strong> ${division}</li>
                    </ul>
                </div>
            `;

            resultContainer.insertAdjacentHTML('beforeend', cardHTML);
        }
    });

    if (resultContainer.innerHTML.trim() === '') {
        resultContainer.innerHTML = '<p>No matching students found.</p>';
    }
});


clearBtn.addEventListener('click', () => {
    searchInput.value = '';
    tabSection.style.display = '';
    searchResults.style.display = 'none';
    resultContainer.innerHTML = '';
    searchInput.focus();
});


