<ul class="hot-deal-countdown" id="countdown-timer">
    <li>
        <div>
            <h3 id="days">00</h3>
            <span>Días</span>
        </div>
    </li>
    <li>
        <div>
            <h3 id="hours">00</h3>
            <span>Horas</span>
        </div>
    </li>
    <li>
        <div>
            <h3 id="minutes">00</h3>
            <span>Minutos</span>
        </div>
    </li>
    <li>
        <div>
            <h3 id="seconds">00</h3>
            <span>Segundos</span>
        </div>
    </li>
</ul>
<script>
    function startCountdown(targetDate) {
        const countdownTimer = document.getElementById("countdown-timer");

        function updateCountdown() {
            const now = new Date();
            const target = new Date(targetDate);
            const diff = target - now;

            if (diff <= 0) {
                clearInterval(timerInterval);
                countdownTimer.innerHTML = '<li><div><h3>00</h3><span>Finalizado</span></div></li>';
                return;
            }

            const days = Math.floor(diff / (1000 * 60 * 60 * 24));
            const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById("days").innerText = String(days).padStart(2, "0");
            document.getElementById("hours").innerText = String(hours).padStart(2, "0");
            document.getElementById("minutes").innerText = String(minutes).padStart(2, "0");
            document.getElementById("seconds").innerText = String(seconds).padStart(2, "0");
        }

        updateCountdown(); 
        const timerInterval = setInterval(updateCountdown, 1000);
    }
    startCountdown("2025-01-31T23:01:10");
</script>
