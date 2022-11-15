<style>
        .view_count {
            background-color: #581845;
            color: #fff;
            font-family: 'Poppins', sans-serif;
            flex-direction: column;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            font-size: 20px;
            margin: 0;
        }
    </style>

    <div class="view_count">
        <p>Views</p>
        <h1 id="count">0</h1>
        <p>Times</p>
    </div>

    <script>
        const countElement = document.getElementById('count');

        update();

        function update() {
            fetch('https://api.countapi.xyz/hit/drgalen/visit/?count=1').then(res => res.json()).then(res => {
                countElement.innerHTML = res.value;
            })
        }
    </script>
