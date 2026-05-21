<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brochure Download Button</title>
    <style>
      

        .circular_section {
            position: fixed;
            bottom: 100px;
            right: 30px;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            /* బటన్, టెక్స్ట్, టోస్ట్ అన్నీ నిలువుగా వరుసగా రావడానికి */
            align-items: center;
            gap: 8px;
        }

        .circular_move__button {
            cursor: pointer;
            border: none;
            background: #7808d0;
            color: #fff;
            width: 65px;
            height: 65px;
            border-radius: 50%;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: background 300ms, transform 200ms;
            font-weight: 600;
            box-shadow: 0 4px 15px rgba(120, 8, 208, 0.3);
        }

        .circular_move__text-container {
            position: absolute;
            top: -24px;
            left: 50%;
            transform: translateX(-50%);
            white-space: nowrap;
            display: flex;
            font-family: sans-serif;
            font-size: 11px;
            font-weight: 700;
            color: #ffffff;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .circular_move__text-container span {
            display: inline-block;
            transform: translateY(-15px);
            opacity: 0;
            animation: circular_move__drop-bounce 2s ease-in-out forwards infinite;
            animation-delay: calc(var(--letter-index) * 0.08s);
        }

        /* వైట్ సర్కిల్ సైజ్ మరియు అలైన్‌మెంట్ */
        .circular_move__button__circle {
            position: relative;
            width: 44px;
            height: 44px;
            overflow: hidden;
            background: #fff;
            color: #7808d0;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 2;
            transition: background 0.3s;
        }

        /* డౌన్‌లోడ్ సింబల్ రాపర్ */
        .circular_move__icon-wrapper {
            position: relative;
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .circular_move__button__icon--copy {
            position: absolute;
            transform: translate(-150%, 150%);
        }

        /* వైట్ సర్కిల్ కింద వచ్చే "DOWNLOAD BROCHURE" టెక్స్ట్ స్టైలింగ్ */
        .circular_move__outer-text {
            font-family: sans-serif;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.8px;
            color: #ffffff;
            background: #7808d0;
            padding: 4px 10px;
            border-radius: 12px;
            text-align: center;
            white-space: nowrap;
            box-shadow: 0 2px 8px rgba(120, 8, 208, 0.2);
            pointer-events: none;
        }

        /* హోవర్ ఎఫెక్ట్స్ */
        .circular_move__button:hover {
            background: #000;
            transform: scale(1.08);
        }

        .circular_move__button:hover .circular_move__button__circle {
            color: #000;
        }

        .circular_move__button:hover .circular_move__button__icon:first-child {
            transition: transform 0.3s ease-in-out;
            transform: translate(150%, -150%);
        }

        .circular_move__button:hover .circular_move__button__icon--copy {
            transition: transform 0.3s ease-in-out 0.1s;
            transform: translate(0);
        }

        @keyframes circular_move__drop-bounce {
            0% {
                transform: translateY(-8px);
                opacity: 0;
            }

            10% {
                transform: translateY(0);
                opacity: 1;
            }

            18% {
                transform: translateY(-2px);
            }

            25%,
            85% {
                transform: translateY(0);
                opacity: 1;
            }

            92%,
            100% {
                transform: translateY(5px);
                opacity: 0;
            }
        }

        /* టోస్ట్ మెసేజ్ ఎగ్జాక్ట్ గా బటన్ కింద వచ్చేలా అప్‌డేట్ చేసిన స్టైల్స్ */
        .circular_move__toast {
            /* background: #2e7d32; */
            background: #7808d0;
            /* సక్సెస్ మెసేజ్ కాబట్టి గ్రీన్ కలర్ (లేదా మీ ఇష్టం వస్తే #7808d0 ఉంచవచ్చు) */
            color: #ffffff;
            font-family: sans-serif;
            font-size: 11px;
            font-weight: 600;
            padding: 6px 12px;
            border-radius: 8px;
            white-space: nowrap;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            opacity: 0;
            transform: translateY(-10px);
            transition: opacity 0.3s, transform 0.3s;
            pointer-events: none;
            text-align: center;
            margin-top: 4px;
        }

        .circular_move__toast.circular_move__show {
            opacity: 1;
            transform: translateY(0);
        }
    </style>
</head>

<body>

    <div class="circular_section">
        <!-- డౌన్‌లోడ్ బటన్ -->
        <button class="circular_move__button" onclick="downloadBrochure()" aria-label="Download Brochure">
            <div class="circular_move__text-container">
                <span style="--letter-index: 1;">C</span>
                <span style="--letter-index: 2;">l</span>
                <span style="--letter-index: 3;">i</span>
                <span style="--letter-index: 4;">c</span>
                <span style="--letter-index: 5;">k</span>
                <span style="--letter-index: 6;">&nbsp;</span>
                <span style="--letter-index: 7;">H</span>
                <span style="--letter-index: 8;">e</span>
                <span style="--letter-index: 9;">r</span>
                <span style="--letter-index: 10;">e</span>
            </div>

            <div class="circular_move__button__circle">
                <div class="circular_move__icon-wrapper">
                    <svg viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="circular_move__button__icon" width="22">
                        <path d="M7 1v8M7 9l-3-3M7 9l3-3M1 11.5h12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg viewBox="0 0 14 14" fill="none" width="22" xmlns="http://www.w3.org/2000/svg" class="circular_move__button__icon circular_move__button__icon--copy">
                        <path d="M7 1v8M7 9l-3-3M7 9l3-3M1 11.5h12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
        </button>

        <!-- సర్కిల్ కింద కనిపించే టెక్స్ట్ -->
        <!-- <div class="circular_move__outer-text">Download Brochure</div> -->

        <!-- టోస్ట్ మెసేజ్ - ఇప్పుడు ఇది కింద పర్ఫెక్ట్ గా వస్తుంది -->
        <div class="circular_move__toast" id="circular_move__toast">✓ Brochure Downloaded!</div>
    </div>

    <script>
        function downloadBrochure() {
            // ఫైల్ పాత్ స్పెక్స్ చెక్ చేసుకోండి
            const filePath = "./assests/images/Bhavi Brochure.pdf";

            const a = document.createElement("a");
            a.href = filePath;
            a.download = "Bhavi_Brochure.pdf";
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);

            // టోస్ట్ మెసేజ్ ని చూపించడం
            const toast = document.getElementById("circular_move__toast");
            toast.classList.add("circular_move__show");

            // 3 సెకన్ల తర్వాత హైడ్ చేయడం
            setTimeout(() => {
                toast.classList.remove("circular_move__show");
            }, 3000);
        }
    </script>

</body>

</html>