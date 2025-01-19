const acceptButtons = document.querySelectorAll('.accept-btn'); // Select buttons with class 'accept-btn'
const acceptPopup = document.getElementById('acceptPopup');
const goBackButton1 = document.getElementById('goBackButton1');

acceptButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Simulate successful account edit (replace with your actual logic)
    // ...

    // Show the success popup
    acceptPopup.style.display = 'block';
  });
});

goBackButton1.addEventListener('click', () => {
  // Hide the success popup
  acceptPopup.style.display = 'none';
  // Optionally, you can close the edit modal here
});

const rejectButtons = document.querySelectorAll('.reject-btn'); // Select buttons with class 'accept-btn'
const rejectPopup = document.getElementById('rejectPopup');
const goBackButton2 = document.getElementById('goBackButton2');

rejectButtons.forEach(button => {
  button.addEventListener('click', () => {
    // Simulate successful account edit (replace with your actual logic)
    // ...

    // Show the success popup
    rejectPopup.style.display = 'block';
  });
});

goBackButton2.addEventListener('click', () => {
  // Hide the success popup
  rejectPopup.style.display = 'none';
  // Optionally, you can close the edit modal here
});