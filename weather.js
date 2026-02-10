const apiKey = "3474f47a37421e00a49581a3dd6fa355";
const lat = 50.8552;
const lon = 0.5729;

fetch(`https://api.openweathermap.org/data/2.5/forecast?lat=${lat}&lon=${lon}&units=metric&appid=${apiKey}`)
    .then(res => res.json())
    .then(data => {

        // Defensive check
        if (!data.list || data.list.length === 0) {
            console.error("No weather data");
            return;
        }

        // TODAY'S WEATHER
        const today = data.list[0];
        const temp = today.main.temp;
        const condition = today.weather[0].main.toLowerCase();

        document.getElementById("today").innerText =
            `Today: ${temp}°C – ${today.weather[0].description}`;

        // HEALTH ISSUES LOGIC
        const issues = [];

        if (temp <= 5) {
            issues.push("Cold-related illnesses (colds and flu)");
            issues.push("Joint and muscle pain");
        }

        if (temp >= 25) {
            issues.push("Dehydration");
            issues.push("Heat exhaustion");
        }

        if (condition.includes("rain")) {
            issues.push("Headaches or migraines");
            issues.push("Low mood or tiredness");
        }

        if (condition.includes("wind")) {
            issues.push("Breathing irritation (e.g. asthma)");
        }

        if (condition.includes("clear")) {
            issues.push("Hay fever (pollen exposure)");
        }

        // DISPLAY ISSUES
        const list = document.getElementById("healthIssues");
        list.innerHTML = "";

        if (issues.length === 0) {
            list.innerHTML = "<li>No common weather-related health issues today</li>";
        } else {
            issues.forEach(issue => {
                const li = document.createElement("li");
                li.textContent = issue;
                list.appendChild(li);
            });
        }
    })
    .catch(err => {
        console.error(err);
    });
