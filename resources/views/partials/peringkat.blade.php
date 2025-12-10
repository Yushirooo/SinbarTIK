<style>
    .peringkat-section {
        padding: 80px 0;
        background: white;
    }

    .peringkat-title {
        font-size: 2rem;
        font-weight: 700;
        color: var(--sinbar-black);
        text-align: center;
        margin-bottom: 50px;
        letter-spacing: 2px;
    }

    .peringkat-container {
        border-radius: 20px;
        padding: 40px;
        overflow: hidden;
    }

    .podium-container {
        display: flex;
        justify-content: center;
        align-items: flex-end;
        margin-bottom: 40px;
        height: 250px;
        gap: 10px;
    }

    .podium-step {
        min-width: 100px;
        max-width: 150px;
        flex: 1;
        background: var(--sinbar-blue);
        border-radius: 10px 10px 0 0;
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-weight: bold;
        font-size: 16px;
        box-shadow: 0 10px 30px rgba(12, 38, 68, 0.3);
        text-align: center;
        padding: 10px 5px;
        word-wrap: break-word;
        hyphens: auto;
    }

    .podium-step.second {
        height: 140px;
    }

    .podium-step.first {
        height: 180px;
        background: #FFD700;
        color: #333;
    }

    .podium-step.third {
        height: 100px;
    }

    .podium-step::before {
        content: '';
        position: absolute;
        top: -25px;
        left: 50%;
        transform: translateX(-50%);
        width: 35px;
        height: 35px;
        background: var(--sinbar-blue);
        border-radius: 50%;
        border: 3px solid white;
    }

    .podium-step.first::before {
        background: #FFD700;
    }

    .podium-step::after {
        position: absolute;
        top: -18px;
        left: 50%;
        transform: translateX(-50%);
        font-size: 14px;
        font-weight: bold;
        color: white;
    }

    .podium-step.first::after {
        content: '1';
        color: #333;
    }

    .podium-step.second::after {
        content: '2';
    }

    .podium-step.third::after {
        content: '3';
    }

    .peringkat-info {
        text-align: center;
    }

    .peringkat-subtitle {
        font-size: 1.1rem;
        color: var(--sinbar-black);
        margin-bottom: 20px;
        font-weight: 600;
    }

    @media (max-width: 768px) {
        .peringkat-title {
            font-size: 1.5rem;
        }

        .podium-container {
            height: 200px;
            gap: 5px;
        }

        .podium-step {
            min-width: 80px;
            max-width: 120px;
            font-size: 14px;
            padding: 8px 3px;
        }

        .podium-step.second {
            height: 110px;
        }

        .podium-step.first {
            height: 140px;
        }

        .podium-step.third {
            height: 80px;
        }
    }
</style>

<div class="peringkat-section">
    <h2 class="peringkat-title">PERINGKAT SINBAR</h2>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="peringkat-container">
                <div class="podium-container">
                    <div class="podium-step second">Muhammad Rafli Al-Farisi</div>
                    <div class="podium-step first">Izan</div>
                    <div class="podium-step third">Cipunkkkk Apalah</div>
                </div>
                <div class="peringkat-info">
                    <p class="peringkat-subtitle">PERINGKAT SINBAR SEMESTER INI BERDASARKAN TOTAL SKOR</p>
                </div>
            </div>
        </div>
    </div>
</div>