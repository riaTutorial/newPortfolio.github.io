window.onload = function() {
			window.location.href = '#top';
		}

// ------------download cv button---------------------------------
document.addEventListener('DOMContentLoaded', function() {
  // Get the download button element
  var downloadButton = document.getElementById('downloadButton');

  // Check if the button exists in the DOM
  if (downloadButton) {
    // Add a click event listener to the button
    downloadButton.addEventListener('click', function() {
      // Set the file path to your CV
      var filePath = 'rv.pdf'; // Replace with the actual path to your CV file

      // Trigger the download by redirecting to the file path
      window.location.href = filePath;
    });
  }
});

