let currentIndex = 0;

function moveLeft() {
    const container = document.getElementById('product-container');
    if (currentIndex > 0) {
        currentIndex--;
        container.style.transform = `translateX(-${currentIndex * 220}px)`;
    }
}

function moveRight() {
    const container = document.getElementById('product-container');
    const maxIndex = container.children.length - 1;
    if (currentIndex < maxIndex) {
        currentIndex++;
        container.style.transform = `translateX(-${currentIndex * 220}px)`;
    }
}

function showDetail(title, description) {
    const modal = document.getElementById('product-detail-modal');
    document.getElementById('modal-title').textContent = title;
    document.getElementById('modal-description').textContent = description;
    modal.style.display = 'block';
}

function closeDetail() {
    const modal = document.getElementById('product-detail-modal');
    modal.style.display = 'none';
}

// Close the modal when clicking outside of it
window.onclick = function(event) {
    const modal = document.getElementById('product-detail-modal');
    if (event.target === modal) {
        modal.style.display = 'none';
    }
};