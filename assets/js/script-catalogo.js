const listaJogos = [{
    name: 'Rainbow Six Siege',
    url: 'jogos/rainbow6.php',
    img: 'https://image.api.playstation.com/vulcan/img/rnd/202103/0217/cE40dxmsoqJUxZ9MKj3BvNOI.png',
    class: 'todos tiro online',
    plataforma: ['fa-brands fa-playstation', 'fa-brands fa-xbox', 'fa-solid fa-computer']
  },
  {
    name: 'Quantum Break',
    url: 'jogos/quantumBreak.php',
    img: 'https://images-americanas.b2w.io/produtos/01/00/img/33456/5/33456531_1GG.jpg',
    class: 'xbox acao-aventura offline',
    plataforma: ['fa-brands fa-xbox']
  },
  {
    name: 'Grand Theft Auto V',
    url: 'jogos/gta5.php',
    img: 'https://image.api.playstation.com/cdn/UP1004/CUSA00419_00/bTNSe7ok8eFVGeQByA5qSzBQoKAAY32R.png',
    class: 'todos tiro offline online',
    plataforma: ['fa-brands fa-playstation', 'fa-brands fa-xbox', 'fa-solid fa-computer']
  },
  {
    name: 'COD: Warzone',
    url: 'jogos/codWarzone.php',
    img: 'https://image.api.playstation.com/vulcan/img/rnd/202112/0721/IlUpZQWRIzPhGMUatFfZtSNp.png',
    class: 'todos tiro online',
    plataforma: ['fa-brands fa-playstation', 'fa-brands fa-xbox', 'fa-solid fa-computer']
  },
  {
    name: 'Cyberpunk 2077',
    url: 'jogos/cyberPunk2077.php',
    img: 'https://upload.wikimedia.org/wikipedia/pt/thumb/f/f7/Cyberpunk_2077_capa.png/270px-Cyberpunk_2077_capa.png',
    class: 'todos acao-aventura tiro offline',
    plataforma: ['fa-brands fa-playstation', 'fa-brands fa-xbox', 'fa-solid fa-computer']
  },
  {
    name: 'Ghost of Tsushima',
    url: 'jogos/ghostOfTsushima.php',
    img: 'https://image.api.playstation.com/vulcan/ap/rnd/202106/2322/c16gs6a7lbAYzPf7ZTikbH1c.png',
    class: 'play acao-aventura offline', 
    plataforma: ['fa-brands fa-playstation']
  },
  {
    name: 'Forza Horizon 5',
    url: 'jogos/forza5.php',
    img: 'https://store-images.s-microsoft.com/image/apps.28758.13734397844529069.202e3fc9-37d6-4853-a58b-fabe504b71e8.4335e940-f927-4be4-af08-8e689a17bd7a',
    class: 'corrida offline online',
    plataforma: ['fa-brands fa-xbox', 'fa-solid fa-computer']

  },
  {
    name: 'Counter Strike',
    url: 'jogos/csgo.php',
    img: 'https://s1.gaming-cdn.com/images/products/9459/orig-fallback-v1/counter-strike-global-offensive-pc-mac-jogo-steam-cover.jpg',
    class: 'pc tiro online',
    plataforma: ['fa-solid fa-computer']
  },
  {
    name: 'F1 2022',
    url: 'jogos/f1-2022.php',
    img: 'https://image.api.playstation.com/vulcan/ap/rnd/202204/0817/ROIUAttMOxc7faLFUjQFJqlL.png',
    class: 'todos corrida offline online',
    plataforma: ['fa-brands fa-playstation', 'fa-brands fa-xbox', 'fa-solid fa-computer']
  },
  {
    name: 'RAFT',
    url: 'jogos/raft.php',
    img: 'https://styles.redditmedia.com/t5_369sb/styles/communityIcon_2psdsp7he1741.png',
    class: 'pc survival offline online',
    plataforma: ['fa-solid fa-computer']
  },
  {
    name: 'Batman: Collection',
    url: 'jogos/batman-collection.php',
    img: 'https://store-images.s-microsoft.com/image/apps.13992.66605680773719506.5b3e4fed-0747-483d-b407-2d6f4da8c3ba.571bc84d-2c3b-44ed-8f55-16e1c5d017f9',
    class: 'xbox acao-aventura offline',
    plataforma: ['fa-brands fa-xbox']
  },
  {
    name: 'Elden Ring',
    url: 'jogos/eldenRing.php',
    img: 'https://image.api.playstation.com/vulcan/ap/rnd/202110/2000/phvVT0qZfcRms5qDAk0SI3CM.png',
    class: 'play acao-aventura offline',
    plataforma: ['fa-brands fa-playstation']
  },
  {
    name: 'Gran Turismo 7',
    url: 'jogos/gt7.php',
    img: 'https://image.api.playstation.com/vulcan/ap/rnd/202109/1321/yZ7dpmjtHr1olhutHT57IFRh.png',
    class: 'play corrida offline online',
    plataforma: ['fa-brands fa-playstation']
  },
  {
    name: 'Dying Light 2',
    url: 'jogos/dyingLight2.php',
    img: 'https://image.api.playstation.com/vulcan/img/rnd/202106/2908/7aJhOMuJALdBPqZHVy3CgJsg.png',
    class: 'todos survival offline',
    plataforma: ['fa-brands fa-playstation', 'fa-brands fa-xbox', 'fa-solid fa-computer']
  },
  {
    name: 'Halo Infinite',
    url: 'jogos/haloInfinite.php',
    img: 'https://store-images.s-microsoft.com/image/apps.21536.13727851868390641.c9cc5f66-aff8-406c-af6b-440838730be0.68796bde-cbf5-4eaa-a299-011417041da6',
    class: 'xbox offline tiro acao-aventura',
    plataforma: ['fa-brands fa-xbox']
  },
  {
    name: 'V Rising',
    url: 'jogos/vRising.php',
    img: 'https://playvrising.com/images/ogImage.png',
    class: 'pc online survival',
    plataforma: ['fa-solid fa-computer']
  },
  {
    name: 'Sniper Elite 5',
    url: 'jogos/sniperElite5.php',
    img: 'https://image.api.playstation.com/pr/bam-art/141/553/3b62ec1d-193e-4147-b348-222c85d01c91.jpg',
    class: 'todos offline acao-aventura',
    plataforma: ['fa-brands fa-playstation', 'fa-brands fa-xbox', 'fa-solid fa-computer']
  },
  {
    name: 'Far Cry 6',
    url: 'jogos/farCry6.php',
    img: 'https://image.api.playstation.com/vulcan/img/rnd/202106/0722/ZD3S3PLtJd6dratIs7lc09mS.png',
    class: 'todos offline acao-aventura survival',
    plataforma: ['fa-brands fa-playstation', 'fa-brands fa-xbox', 'fa-solid fa-computer']
  },
  {
    name: 'Horizon II',
    url: 'jogos/horizon2.php',
    img: 'https://image.api.playstation.com/pr/bam-art/128/259/a7b40966-3908-48a3-8e9a-d881265eca3f.jpg',
    class: 'play offline acao-aventura',
    plataforma: ['fa-brands fa-playstation']
  },
  {
    name: 'Gears 5',
    url: 'jogos/gears5.php',
    img: 'https://store-images.s-microsoft.com/image/apps.10933.65494054591008504.4eae27ba-1cfe-4af2-950a-4af81f8cd22a.b5b2909d-8884-48d0-b25a-68d6518c9b73',
    class: 'xbox offline acao-aventura',
    plataforma: ['fa-brands fa-xbox fa-xl']
  },
  {
    name: 'Hacker Simulator',
    url: 'jogos/hackerSimulator.php',
    img: 'https://img.g2a.com/323x433/1x1x0/hacker-simulator-pc-steam-key-global/f742b8d4b5c4432ebb68bce6',
    class: 'pc offline acao-aventura',
    plataforma: ['fa-solid fa-computer']
                    
  },
  {
    name: 'Horzion Chase Turbo',
    url: 'jogos/horizonChaseTurbo.php',
    img: 'https://image.api.playstation.com/cdn/UP0040/CUSA12640_00/of0HNG3HlUwbYyM5OB2Lo0IWmXNkPhyn.png',
    class: 'todos offline corrida',
    plataforma: ['fa-brands fa-playstation', 'fa-brands fa-xbox', 'fa-solid fa-computer']
                    
  },
  {
    name: 'The Witcher 3',
    url: 'jogos/theWitcher3.php',
    img: 'https://image.api.playstation.com/vulcan/img/rnd/202009/2913/TQKAd8U6hnIFQIIcz6qnFh8C.png',
    class: 'todos offline acao-aventura',
    plataforma: ['fa-brands fa-playstation', 'fa-brands fa-xbox', 'fa-solid fa-computer']
                    
  },
  {
    name: 'Dark Souls 3',
    url: 'jogos/darkSouls3.php',
    img: 'https://image.api.playstation.com/cdn/UP0700/CUSA03388_00/v8JlD8KcQUtTqaLBmpFnj1ESRR5zMkLk.png',
    class: 'todos offline acao-aventura',
    plataforma: ['fa-brands fa-playstation', 'fa-brands fa-xbox', 'fa-solid fa-computer']
                    
  }
  ];

  listaJogos.map((game)=>{
    const catalogo = document.getElementById('jogos')
    const jogo = document.createElement('div')
    const img = document.createElement('img')
    const url = document.createElement('a')
    const divPlataforma = document.createElement('div')

    const nomeJogo = document.createElement('h5')

    img.src = game.img
    img.style.width = '200px';
    nomeJogo.innerText = game.name
    game.plataforma.map(item=>{
        const plataforma = document.createElement('i')
        plataforma.classList.add('fa-xl')
        item.split(' ').map(name=>{

            plataforma.classList.add(name)
        })
        divPlataforma.appendChild(plataforma)
    })

    game.class.split(' ').map(item=>{
        jogo.classList.add(item)
    })

    divPlataforma.classList.add("plataformas")
    

    jogo.classList.add('jogo')
    url.href = game.url

    catalogo.appendChild(jogo)
    jogo.appendChild(img)
    url.appendChild(img)
    jogo.appendChild(url)
    jogo.appendChild(divPlataforma)
    jogo.appendChild(nomeJogo)

  })



