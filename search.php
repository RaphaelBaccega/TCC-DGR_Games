<body>
    <div class="container justify-content-center mb-5" style="margin-top: 10rem;">
        <div class="row">
            <div class="col-md-7 m-auto">
                <form id="form-pesquisa" class="input-group search">
                    <input type="text" class="form-control input-text" id="search-input" placeholder="Pesquisar jogo...." autocomplete="off">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary" id="button-input" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </form>
                <div class="results" id="results">
                </div>

            </div>
        </div>
    </div>
</body>
<script>
    const jogos = [{
            name: 'Rainbow Six Siege',
            url: '/tcc/pages/jogos/rainbow6.php'
        },
        {
            name: 'Call of Duty: Warzone',
            url: '/tcc/pages/jogos/codWarzone.php'
        },
        {
            name: 'Grand Theft Auto V',
            url: '/tcc/pages/jogos/gta5.php'
        },
        {
            name: 'Counter Strike',
            url: '/tcc/pages/jogos/csgo.php'
        },
        {
            name: 'Cyberpunk 2077',
            url: '/tcc/pages/jogos/cyberPunk2077.php'
        },
        {
            name: 'Dyling Light 2',
            url: '/tcc/pages/jogos/dyingLight2.php'
        },
        {
            name: 'F1 2022',
            url: '/tcc/pages/jogos/f1-2022.php'
        },
        {
            name: 'Forza Horizon 5',
            url: '/tcc/pages/jogos/forza5.php'
        },
        {
            name: 'Gran Turismo 7',
            url: '/tcc/pages/jogos/gt7.php'
        },
        {
            name: 'Halo Infinite',
            url: '/tcc/pages/jogos/haloInfinite.php'
        },
        {
            name: 'Elden Ring',
            url: '/tcc/pages/jogos/eldenRing.php'
        },
        {
            name: 'Ghost of Tsushima',
            url: '/tcc/pages/jogos/ghostOfTsushima.php'
        },
        {
            name: 'RAFT',
            url: '/tcc/pages/jogos/raft.php'
        },
        {
            name: 'V Rising',
            url: '/tcc/pages/jogos/vRising.php'
        },
        {
            name: 'Quantum Break',
            url: '/tcc/pages/jogos/quantumBreak.php'
        },
        {
            name: 'Sniper Elite 5',
            url: '/tcc/pages/jogos/sniperElite5.php'
        },
        {
            name: 'Farcry 6',
            url: '/tcc/pages/jogos/farCry6.php'
        },
        {
            name: 'Horizon II: Forbidden West',
            url: '/tcc/pages/jogos/horizon2.php'
        },
        {
            name: 'Gears 5',
            url: '/tcc/pages/jogos/Gears5.php'
        },
        {
            name: 'Hacker Simulator',
            url: '/tcc/pages/jogos/hackerSimulator.php'
        },
        {
            name: 'Horizon Chase Turbo',
            url: '/tcc/pages/jogos/horizonChaseTurbo.php'
        },
        {
            name: 'The Witcher 3',
            url: '/tcc/pages/jogos/theWitcher3.php'
        },
        {
            name: 'Dark Souls III',
            url: '/tcc/pages/jogos/darkSouls3.php'
        }
    ]
    const results = document.getElementById("results");
    const ul = document.createElement("ul")
    results.appendChild(ul)
    jogos.map(item => {
        const li = document.createElement("li")
        li.classList.add("item")
        li.innerHTML = `<a href="${item.url}">${item.name}</a>`
        ul.appendChild(li)
    })
    document.querySelector("#search-input").addEventListener("input", filterList)
    document.querySelector("#button-input").addEventListener("click", filterList)


    function filterList() {
        const searchInput = document.querySelector("#search-input");
        const filter = searchInput.value.toLowerCase();
        const listItems = [].slice.call(document.querySelectorAll(".item"));

        if (searchInput.value.length < 1) {
            results.style.display = 'none'
        } else {
            results.style.display = 'block'
        }

        listItems.forEach((item) => {

            let text = item.textContent;
            if (text.toLocaleLowerCase().includes(filter.toLocaleLowerCase())) {
                item.style.display = 'block'
            } else {
                item.style.display = 'none'
            }
        })
    }
    const form = document.querySelector("#form-pesquisa")
    form.addEventListener("submit", (e) => {
        const searchInput = document.querySelector("#search-input");
        const filter = searchInput.value.toLowerCase();
        const listItems = [].slice.call(document.querySelectorAll(".item"));
        const gameSalvo = e.preventDefault()
        const linkJogos = [].slice.call(document.querySelectorAll(".item a"));
        listItems.forEach((item) => {
        
            let text = item.textContent;
            
            if (text.toLocaleLowerCase().includes(filter.toLocaleLowerCase())) {
                const jogoFiltrado = jogos.find(e => (e.name == text && e.url))
                window.location = jogoFiltrado.url
                item.style.display = 'block'
            } else {
                item.style.display = 'none'
            }
        })

        filterList()

    })


    filterList()
</script>
