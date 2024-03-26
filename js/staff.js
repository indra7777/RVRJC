
  function experience(date) {
    // Get the current date
    const currentDate = new Date();

    // Date of birth
    const dob = new Date(date);


    const diffMilliseconds = currentDate - dob;

    // Convert milliseconds to years, months, and days
    const msPerYear = 1000 * 60 * 60 * 24 * 365.25; // Approximation for leap years
    const years = Math.floor(diffMilliseconds / msPerYear);
    const months = Math.floor((diffMilliseconds % msPerYear) / (1000 * 60 * 60 * 24 * (365.25 / 12)));
    const days = Math.floor((diffMilliseconds % msPerYear) / (1000 * 60 * 60 * 24));

    // Display the difference
    return ` ${years} yearsa and ${months} months`;
  }

  function dateToWords(date) {
    // Array of names of months
    const months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    // Array of names of days of the week
    const days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    // Get the current date
    const currentDate = new Date(date);

    // Get the day of the week and month as numbers
    const dayOfWeek = currentDate.getDay();
    const month = currentDate.getMonth();

    // Convert the day of the week and month to their respective names
    const dayName = days[dayOfWeek];
    const monthName = months[month];

    // Construct the date in words
    const dateInWords = monthName + " " + currentDate.getDate() + ", " + currentDate.getFullYear();

    // Display the date
    return dateInWords;

  }