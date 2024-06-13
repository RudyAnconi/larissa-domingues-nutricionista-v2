<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Larissa Domingues Nutricionista</title>

    <meta name="description" content="Essa é o portfólio da nutricionista Larissa Domingues" />
    <meta property="og:title" content="Larissa Domingues Nutricionista" />
    <meta property="og:description" content="Essa é o portfólio da nutricionista Larissa Domingues" />
    <meta property="og:image" content="https://utfs.io/f/737847b2-4588-405e-9e17-3650c95d80d3-1zbfv.svg" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Larissa Domingues Nutricionista" />
    <meta name="twitter:description" content="Essa é o portfólio da nutricionista Larissa Domingues" />
    <meta name="twitter:image" content="https://utfs.io/f/737847b2-4588-405e-9e17-3650c95d80d3-1zbfv.svg" />
    <link rel="icon" href="https://utfs.io/f/6ecde300-353d-4c75-a204-31fd4fdad232-1x5rt.png" type="image/png"
        sizes="512x512" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossOrigin="anonymous" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Tenor+Sans&display=swap"
        rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-background text-foreground font-welcome relative">
    <div class="flex inset-0 absolute z-0">
        <div class="flex-1 bg-background"></div>
        <div class="flex-1 bg-foreground"></div>
    </div>
    <!-- Navbar -->
    <div class="sticky top-5 left-0 right-0 z-40 bg-background/50 py-4 hidden md:block">
        <div class="container m-auto ">
            <div class="flex justify-between items-center m-auto w-[95%] text-foreground">
                <div class="tracking-widest">PORTFÓLIO</div>
                <div class="tracking-widest">
                    LARISSA DOMINGUES <strong>NUTRICIONISTA</strong>
                </div>
            </div>
        </div>
    </div>
    <!-- Whatsapp -->
    <div
        class="fixed bottom-10 right-3 md:right-20 lg:right-[21.2rem] w-10 h-10 rounded-full p-2 bg-foreground border border-background z-50 transition-all hover:scale-110">
        <a class="decoration-none"
            href="https://wa.me/5562992916766?text=Ol%C3%A1.+Gostaria+de+saber+mais+sobre+a+consulta+nutricional."
            target="_blank">
            <img class="invert"
                src="https://larissa-domingues-nutricionista.cdn.prismic.io/larissa-domingues-nutricionista/Zh2IBjjCgu4jz1ad_whatsapp-svgrepo-com.svg"
                alt="Whatsapp" width='48' height='48' />
        </a>
    </div>
    <!-- HERO -->
    <div class="relative md:-mt-14">
        <div class="flex inset-0 absolute z-0">
            <div class="flex-1 bg-background"></div>
            <div class="flex-1 bg-foreground"></div>
        </div>
        <div class="container m-auto bg-background text-background rounded-r-[5rem] relative z-1 overflow-hidden">
            <img src="https://utfs.io/f/4897541a-a666-4c0a-b242-6d73a94e2460-1wkca.jpg" alt="" />
            <div
                class="absolute grid text-center
                            [ -bottom-6 -right-3 scale-[55%] ]
                            [ md:bottom-6 md:right-14 md:scale-100 ]
                            [ lg:bottom-14 lg:right-48 lg:scale-125 ]">
                <div class="flex justify-end md:justify-center mb-3">
                    <img class="invert" src="https://utfs.io/f/737847b2-4588-405e-9e17-3650c95d80d3-1zbfv.svg"
                        alt="" />
                </div>
                <h3 class="text-2xl">LARISSA DOMINGUES</h3>
                <p class="tracking-widest">
                    NUTRICIONISTA
                </p>
            </div>
        </div>
    </div>
    <!-- BEM VINDO -->
    <div class="">
        <div
            class="container m-auto bg-foreground text-background rounded-[5rem] rounded-tl-none py-16 px-6 md:p-16 relative z-1">
            <h1
                class="text-4xl relative 
                [ after:content[''] after:absolute after:-bottom-3 after:left-0 after:h-2 after:bg-background after:w-24 ]">
                Seja Bem - vindo
            </h1>
            <div class="text-2xl lg:text-4xl my-16">
                Sou a nutricionista <strong>Larissa Domingues</strong> e será um prazer te mostrar que a alimentação
                saudável não precisa
                ser complicada.
            </div>
        </div>
    </div>
    <!-- OBJETIVOS -->
    <div class="">
        <div
            class="container m-auto bg-background text-foreground rounded-[5rem] rounded-tl-none pt-80 px-6 md:p-16 md:pt-0 md:pb-0 relative z-1">
            <img alt="" class="[ md:-ml-24 md:h-[550px] md:w-auto ] 
                [ lg:-ml-12 lg:scale-100 ]"
                src="https://utfs.io/f/b39df4fe-0bd1-45e5-a6da-b7da58682ce1-1i6a7w.png" />
            <div class="absolute md:right-14 right-12 top-12 md:top-1/2 md:-translate-y-1/2">
                <div class="flex items-center gap-3 justify-end">
                    <img alt="" width='40' height='40'
                        src='https://utfs.io/f/fd14c2b6-1775-4157-9fb6-36aec352018f-ewkop8.svg' />
                    <h1
                        class="text-4xl relative
            after:content[''] after:absolute after:-bottom-3 after:left-0 after:h-2 after:bg-foreground after:w-24">
                        Objetivos:
                    </h1>
                </div>
                <div class="grid items-center gap-3 justify-end my-16">
                    <div
                        class="text-2xl md:text-2xl lg:text-4xl text-right pr-7 relative
                        after:content[''] after:absolute after:right-0 after:top-3 after:h-3 after:bg-foreground after:w-3">
                        Reeducação Alimentar
                    </div>
                    <div
                        class="text-2xl md:text-2xl lg:text-4xl text-right pr-7 relative
                        after:content[''] after:absolute after:right-0 after:top-3 after:h-3 after:bg-foreground after:w-3">
                        Emagrecimento
                    </div>
                    <div
                        class="text-2xl md:text-2xl lg:text-4xl text-right pr-7 relative
                        after:content[''] after:absolute after:right-0 after:top-3 after:h-3 after:bg-foreground after:w-3">
                        Hipertrofia
                    </div>
                </div>
            </div>
        </div>
        <!-- CONSULTA -->
        <div class="">
            <div class="container m-auto bg-foreground text-background rounded-[5rem] py-16 px-6 md:p-16 relative z-1">
                <div class="flex justify-start gap-2 mb-10">
                    <img class="invert" alt="" width="39" height="36"
                        src="https://utfs.io/f/1923ce06-0501-4560-b556-ab6e601cc0fe-zhlsh6.svg" />
                    <h1
                        class="text-2xl md:text-4xl relative
                    [ after:content[''] after:absolute after:-bottom-4 after:left-0 after:h-2 after:bg-background after:w-24 ]">
                        Nossa consulta nutricional será da seguinte forma:
                    </h1>
                </div>
                <div class="grid items-center gap-3 justify-end my-16">
                    <div
                        class="text-xl pl-7 relative [&_a]text-blue-500
                            [ md:text-xl ] [ lg:text-2xl ] 
                            [ after:content[''] after:absolute after:left-0 after:top-3 after:h-3 after:bg-background after:w-3 ]">
                        <p>Será enviado antes da consulta um <a target="_blank"
                                href="https://forms.gle/zsDbXx8gbjtxzXX69"
                                rel="noreferrer"><strong>questionário</strong></a> para <strong>coleta de
                                informações</strong>.</p>
                    </div>
                    <div
                        class="text-xl pl-7 relative [&_a]text-blue-500
                            [ md:text-xl ] [ lg:text-2xl ] 
                            [ after:content[''] after:absolute after:left-0 after:top-3 after:h-3 after:bg-background after:w-3 ]">
                        <p>Na primeira consulta vou <strong>entender </strong>sobre sua <strong>rotina</strong>, seus
                            objetivos, <strong>dificuldades </strong>e considerações.</p>
                    </div>
                    <div
                        class="text-xl pl-7 relative [&_a]text-blue-500
                        [ md:text-xl ] [ lg:text-2xl ] 
                        [ after:content[''] after:absolute after:left-0 after:top-3 after:h-3 after:bg-background after:w-3 ]">
                        <p>Faremos uma <strong>avaliação </strong>da composição corporal através das dobras cutâneas e
                            circunferências ou <strong>Bioimpêdancia</strong> (somente no modo presencial).</p>
                    </div>
                    <div
                        class="text-xl pl-7 relative [&_a]text-blue-500
                        [ md:text-xl ] [ lg:text-2xl ] 
                        [ after:content[''] after:absolute after:left-0 after:top-3 after:h-3 after:bg-background after:w-3 ]">
                        <p>Elaboraremos seu <strong>plano alimentar </strong>de forma individualizada, de modo que
                            preferências e rotinas sejam priorizadas.</p>
                    </div>
                    <div
                        class="text-xl pl-7 relative [&_a]text-blue-500
                        [ md:text-xl ] [ lg:text-2xl ] 
                        [ after:content[''] after:absolute after:left-0 after:top-3 after:h-3 after:bg-background after:w-3 ]">
                        <p>Caso necessário, faremos <strong>prescrições de suplementos</strong> de acordo com cada
                            necessidade.</p>
                    </div>
                    <div
                        class="text-xl pl-7 relative [&_a]text-blue-500
                        [ md:text-xl ] [ lg:text-2xl ] 
                        [ after:content[''] after:absolute after:left-0 after:top-3 after:h-3 after:bg-background after:w-3 ]">
                        <p><strong>Suporte </strong>via <a target="_blank" class="relative inline-block"
                                href="https://wa.me/5562992916766?text=Ol%C3%A1.+Gostaria+de+saber+mais+sobre+a+consulta+nutricional."
                                rel="noreferrer">whatsapp<span
                                    class="absolute w-full h-1 bottom-[-5px] left-0 right-0 border-b-4 border-dotted"></span>
                            </a> para sanar dúvidas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- TEMPO CONSULTA -->
    <div class="">
        <div
            class="container m-auto bg-background text-foreground rounded-[5rem] rounded-tl-none pt-80 px-6 md:p-16 md:pt-0 md:pb-0 relative z-1">
            <img alt=""
                class="[ md:-ml-24 md:h-[550px] md:w-auto ] 
                [ lg:-ml-12 lg:scale-100 ]"
                src="https://utfs.io/f/9fc649db-7b3d-4a8b-9a5c-3348450e9cfa-6ynxgj.png" />
            <div
                class="absolute left-8 right-8 top-6 
            [ md:left-auto md:right-14 md:top-1/2 md:-translate-y-1/2 ]">
                <div class="flex items-center gap-3 justify-end">
                    <img alt="" width='40' height='40'
                        src='https://utfs.io/f/7cfaa83c-98e3-4076-a39e-d67c0a8a3f69-t4c9ya.svg' />
                    <h1
                        class="text-4xl relative
            after:content[''] after:absolute after:-bottom-3 after:left-0 after:h-2 after:bg-foreground after:w-24">
                        Tempo de Consulta
                    </h1>
                </div>
                <div class="flex justify-end">
                    <div class="grid items-end gap-3 justify-end my-16 md:w-[52%] lg:w-[50%]">

                        <div
                            class="text-2xl md:text-2xl lg:text-4xl text-right pr-7 relative 
                        after:content[''] after:absolute after:right-0 after:top-3 after:h-3 after:bg-foreground after:w-3">
                            <p>A primeira consulta terá a duração de aproximadamente <strong>1h</strong> e
                                oacompanhamento <strong>30 minutos</strong>.</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- RODAPE -->
    <div class="container m-auto bg-foreground text-background rounded-[5rem] py-16 px-6 md:p-16 relative z-1">
        <div class="text-2xl lg:text-4xl grid justify-center items-center mb-10">
            <p>Conte comigo para te ajudar a ter uma vida mais saudável!!</p>
        </div>
        <div class="text-2xl lg:text-4xl grid justify-center items-center mb-10">
            <h2
                class="text-4xl relative    [ after:content[''] after:absolute after:-bottom-3 after:left-0 after:h-2 after:bg-background after:w-24 ]">
                <p>LARISSA DOMINGUES</p>
            </h2>
        </div>
        <div class="text-2xl lg:text-4xl grid justify-center items-center mb-10">
            <p>CRN/1 24504</p>
        </div>
    </div>
</body>

</html>
