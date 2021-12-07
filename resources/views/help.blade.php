@extends('layouts.main')

@section('title', 'Galeri - Ajuda')

@section('content')

    <span style="font-weight: bold; margin: 20px 0;">SUPORTE E AJUDA</span>
    <span style="font-size: 18px; width: 540px; text-align: justify; margin-bottom: 20px;">Caso esteja com algum problema com o site, verifique alguma das
    soluções mais comuns abaixo. Se você acha que alguma coisa está fora do lugar, ou que alguma ferramenta
    não está funcionando, você pode falar diretamente com a equipe de suporte pelo e-mail.</span>

    <span style="font-weight: bold; margin-bottom: 20px;">PERGUNTAS FREQUENTES</span>

    <div id="qaContainer">
        <div id="qContainer">
            <span>P.</span>
            <span style="font-size: 18px; margin-left: 10px;">Como os temas funcionam?</span>
        </div>

        <div id="aContainer">
            <span>R.</span>
            <span style="font-size: 18px; margin-left: 10px;">Os temas são alterados reguarlmente com o intuito de manter variedade e
            a interação por meio de novas postagens.</span>
        </div>
    </div>

    <div id="qaContainer">
        <div id="qContainer">
            <span>P.</span>
            <span style="font-size: 18px; margin-left: 10px;">Posso enviar videos?</span>
        </div>

        <div id="aContainer">
            <span>R.</span>
            <span style="font-size: 18px; margin-left: 10px;">Não. O site possuí o intuito apenas do compartilhamento de imagens.</span>
        </div>
    </div>

    <div id="qaContainer">
        <div id="qContainer">
            <span>P.</span>
            <span style="font-size: 18px; margin-left: 10px;">Tenho uma dúvida que não foi respondida aqui.</span>
        </div>

        <div id="aContainer">
            <span>R.</span>
            <span style="font-size: 18px; margin-left: 10px;">Caso ainda tenha dúvidas basta contatar o nosso suporte
        por meio do botão abaixo ou utilizando do email disponibilizado.</span>
        </div>
    </div>

    <a href="https://mail.google.com/mail/?view=cm&fs=1&to=ogrupoeap@gmail.com" target="_blank">
        <button id="contactButton">CONTATAR SUPORTE</button>
    </a>
    <span style="font-size: 18px; margin: 15px 0;"><b style="font-size: 18px;">Email do suporte:</b> ogrupoeap@gmail.com</span>

    <a href="/home" id="goBackA">
        <span id="goBack">Voltar</span>
    </a>

