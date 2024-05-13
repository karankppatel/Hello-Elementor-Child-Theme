document.addEventListener("DOMContentLoaded", function() {
    const apiKey = 'c487789dc80e59960e9a2101abd07333';
    const city = 'New York';
    const apiUrl = `https://api.openweathermap.org/data/2.5/weather?q=${city}&appid=${apiKey}&units=metric`;

    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            const temperature = data.main.temp;
            const description = data.weather[0].description;

            // Update the hero banner with weather information
            const heroBanner = document.querySelector('.hero-banner');
            heroBanner.innerHTML = `
                <h1>Weather in ${city}</h1>
                <p>Temperature: ${temperature}°C</p>
                <p>Description: ${description}</p>
            `;
        })
        .catch(error => console.error('Error fetching weather data:', error));
});

