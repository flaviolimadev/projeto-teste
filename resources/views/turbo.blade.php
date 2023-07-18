    @extends('_layouts.basev2')

    @section('titulo','Rede de indicações')
    @section('diretorio', 'Dashboard / Operações / Em aberto')


    @section('conteudo')
        <style>
        #sidebar ul.menu-categories.ps {
            margin-top: 0px !important;
        }
        .area-casas .area-odd div img {
            height: 25px !important;
        }
        .layout-top-spacing {
            justify-content: center;
            margin-top: 10px !important;
        }
        @media(max-width: 900px) {
            .layout-top-spacing {
                margin-top: 10px !important;
            }
        }
        @media(max-width: 500px) {
            div#content {
                margin-top: 100px !important;
            }
        }
        label.form-check-label {
            position: relative;
            top: 5px;
            left: 10px;
        }

        span.title-liga {
            text-transform: uppercase;
        }

        .header-item-op {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            background: #fff;
            padding: 5px 10px;
            border-radius: 10px 10px 0px 0px;
        }

        body.dark .header-item-op {
            background: #1a1c2d;
        }

        .header-item-op div {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .header-item-op img {
            position: relative;
            top: 2px;
        }

        .body-item-op {
            background: #ececec;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
            padding: 10px;
        }

        body.dark .body-item-op {
            background: #1f212d;
        }

        .body-item-op .right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .body-item-op .right div {
            display: flex;
            flex-direction: column;
            text-align: center;
        }

        span.odd {
            height: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            color: #000;
            font-weight: 700;
            border-radius: 5px;
        }

        body.dark span.odd {
            background: transparent;
        }

        span.odd input {
            font-size: 13px;
            width: 60px;
            height: 25px;
            border: none;
            background: transparent;
            padding: 5px;
        }

        body.dark span.odd input {
            border-radius: 5px;
        }

        .item-op {
            font-size: 12px;
            font-weight: 700;
        }


        body .body-item-op .left p a {
            color: #515365 !important;
        }

        body.dark .body-item-op .left p a {
            color: #e0e6ed !important;
        }

        img.logo-casa-op {
            height: 25px;
            width: auto;
            max-width: 100%;
            background: #cdcdcd;
            border-radius: 0px 0px 10px 10px;
        }

        .body-item-op .right span:nth-child(1) {
            margin-bottom: 5px;
            font-size: 12px;
            font-weight: 700;
        }

        span.link-mais {
            margin-top: 5px;
            font-size: 12px;
            color: #00a1ff;
            font-weight: 700;
        }

        .body-item-op .left p:nth-child(1), .body-item-op .left p:nth-child(3), .body-item-op .left p:nth-child(5), .body-item-op .left p:nth-child(6) {
            margin-bottom: 0px;
        }

        .body-item-op .left p:nth-child(1), .body-item-op .left p:nth-child(2) {
            font-weight: 700;
        }

        .footer-item-op {
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: relative;
        }

        button.btn-calc-op {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 5px 20px;
            font-weight: 700;
            border: none;
            border-radius: 0px 0px 10px 0px;
            background: #006ac2;
            color: #fff;
            font-style: italic;
            height: 31px;
        }

        i.fa-solid.fa-calculator {
            font-size: 1rem;
        }

        span.lucro-op {
            display: flex;
            align-items: center;
            height: 31px;
            width: 100%;
            padding-left: 10px;
            background: #00c275;
            color: #fff;
            border-radius: 0px 0px 0px 10px;
            font-style: italic;
            gap: 5px;
        }

        .tag-triang {
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid #00c275;
            position: absolute;
            top: -8px;
            left: 15px;
        }

        .area-operacoes {
            display: flex;
            justify-content: space-between;
            gap: 10px;
        }

        .area-operacoes .itens-operacoes {
            width: 60%;
        }

        .area-operacoes .itens-tutorial {
            width: 40%;
        }

        .box-tutorial {
            position: relative;
            width: 100%;
            height: 186px;
            background-image: url("../img/tutorial.png");
            background-size: cover;
            background-position: left top;
            background-repeat: no-repeat;
            border-radius: 10px;
        }

        .box-tutorial button {
            display: none;
            border: none;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-weight: 700;
            padding: 5px 10px;
            border-radius: 5px;
            white-space: nowrap;
            background: #006ac2;
            color: #fff;
            transition: .3s;
        }

        .box-tutorial:hover {
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url("../img/tutorial.png");
        }

        .box-tutorial:hover button {
            display: block;
        }

        #modalTutorial button.btn-close {
            position: absolute;
            top: 5px;
            right: 5px;
        }

        #modalTutorial .modal-content {
            border: none;
            padding: 30px 5px 5px;
            border-radius: 10px;
        }

        #modalTutorial img {
            border-radius: 10px;
        }

        .item-op, .box-tutorial {
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        body.dark .box-tutorial {
            box-shadow: rgba(26, 28, 45, 0.75) 0px 0px 15px;
        }

        #modalCalculadora .modal-content {
            background: #fff;
        }

        body.dark #modalCalculadora .modal-content {
            background: #0e1726;
        }

        #modalCalculadora .btn-close {
            filter: invert(0) grayscale(100%) brightness(200%);
        }

        body.dark #modalCalculadora .btn-close {
            filter: invert(1) grayscale(100%) brightness(200%);
        }

        #modalCalculadora .modal-content {
            margin: 0px;
            border: 0px;
            border-radius: 10px;
            position: relative;
        }

        #modalCalculadora .btn-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
        }

        p.title-calc {
            text-align: center;
            font-style: italic;
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 0px;
            padding: 1rem;
        }

        .area-jogo-calculadora {
            text-align: center;
            font-size: 1rem;
            background: #cdcdcd;
            padding: 1rem;
        }

        body.dark .area-jogo-calculadora {
            background: #1f212d;
        }

        .area-jogo-calculadora p {
            margin-bottom: 0px;
        }

        .area-jogo-calculadora p:nth-child(1) {
            font-weight: 700;
        }

        .area-jogo-calculadora p:nth-child(2) {
            font-size: 14px;
            margin-top: 5px;
        }

        .area-jogo-calculadora p:nth-child(2) span {
            color: #00a1ff;
            font-weight: 700;
        }

        .area-valor-calculadora {
            padding: 1rem;
            margin: 1rem 1rem 0;
        }

        .area-valor-calculadora p:nth-child(1) {
            font-size: 1rem;
            font-weight: 700;
            text-transform: uppercase;
            font-style: italic;
            text-align: center;
        }

        .area-input {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .area-input input {
            width: 100%;
            border: none;
            text-align: end;
            padding: 5px;
            background-color: transparent;
        }

        body.dark .area-input input, body.dark .area-input input::placeholder {
            color: #888ea8;
        }

        .area-input div {
            width: 47%;
        }

        span.tag-igual {
            font-weight: 700;
            font-size: 1.5rem;
            width: 6%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .area-input .investir {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border: 1px solid #cdcdcd;
            border-radius: 7px;
            padding: 0px 5px;
        }

        .area-input .investir label {
            margin: 0px;
            font-size: 12px;
            font-weight: 700;
        }

        .area-input .retorno {
            height: 33px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px;
            border-radius: 7px;
            background: #00c275;
            color: #fff;
        }

        .area-input .retorno span:nth-child(1) {
            font-size: 12px;
        }

        .area-input .retorno span:nth-child(2) {
            font-weight: 700;
        }

        .area-resultado-final {
            padding: 1rem;
        }

        .area-resultado-final .title {
            text-align: center;
            text-transform: uppercase;
            font-size: 12px;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .area-resultado-final .title::after {
            content: "    - - - - - - - - - - - -";
        }

        .area-resultado-final .title::before {
            content: "- - - - - - - - - - - -    ";
        }

        .footer-resultado-final {
            display: flex;
            justify-content: space-between;
            margin-top: 2rem;
        }

        .footer-resultado-final li p {
            margin: 0px;
            text-transform: uppercase;
            font-size: 12px;
            font-weight: 600;
        }

        .footer-resultado-final li {
            list-style: none;
            text-align: center;
        }

        .footer-resultado-final span {
            font-weight: 700;
            color: #515365;
        }

        body.dark .footer-resultado-final span {
            color: #888ea8;
        }

        li.lucro-certo span {
            color: #00c275 !important;
            font-size: 1rem;
        }

        .item-casa {
            display: flex;
            justify-content: space-between;
            gap: 25px;
        }

        .item-casa li:nth-child(1) {
            width: 50%;
        }

        .item-casa li:nth-child(2), .item-casa li:nth-child(3) {
            width: 25%;
        }

        .area-casas {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .area-casas li {
            list-style: none;
            text-align: center;
            position: relative;
        }

        .area-casas p {
            text-transform: uppercase;
            font-size: 12px;
            margin-bottom: 5px !important;
            color: #0e1726;
            font-weight: 700;
        }

        .area-casas .area-odd {
            background: #006ac2;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 5px 1rem 5px 5px;
            border-radius: 7px;
            color: #fff;
            font-weight: 700;
            height: 40px;
        }

        .area-casas .area-odd div {
            background-color: #fff;
            border-radius: 7px;
        }

        .area-casas li:nth-child(2) span, .area-casas li:nth-child(3) span {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 40px;
            border: 1px solid #cdcdcd;
            border-radius: 7px;
            color: #000;
            font-weight: 700;
        }

        body.dark .area-casas li:nth-child(2) span {
            color: #fff;
        }

        .area-casas li:nth-child(3) span {
            background: #cdcdcd;
        }

        .item-casa li:nth-child(1)::after {
            content: 'X';
            position: absolute;
            top: 50%;
            right: -18px;
            font-weight: 700;
        }

        .item-casa li:nth-child(2)::after {
            content: '=';
            position: absolute;
            top: 45%;
            right: -18px;
            font-weight: 700;
            font-size: 1.2rem;
        }

        .area-filtros button {
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 7px 10px;
            float: right;
            border: 1px solid #d3d3d3;
            border-radius: 10px;
            font-size: 13px;
            color: #1b2e4b;
            transition: .3s;
        }

        body.dark .area-filtros button {
            background: #1a1c2d;
            border: 1px solid #3b3f5c;
            color: #e0e6ed;
        }

        #modalFiltro .modal-content {
            background: #fff;
            margin: 0px;
            border: 0px;
            position: relative;
        }

        body.dark #modalFiltro .modal-content {
            background: #0e1726;
        }

        #modalFiltro .btn-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
        }

        #modalFiltro .btn-close {
            filter: invert(0) grayscale(100%) brightness(200%);
        }

        body.dark #modalFiltro .btn-close {
            filter: invert(1) grayscale(100%) brightness(200%);
        }

        p.title-filtro {
            text-align: center;
            font-style: italic;
            font-weight: 700;
            font-size: 1rem;
            margin-bottom: 0px;
            padding: 1rem;
        }

        .area-check-filtro p, .area-check-filtro label {
            margin-bottom: 0px;
            text-align: center;
        }

        .area-check-filtro div {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .area-check-filtro {
            padding: 1rem;
            margin-bottom: 1rem;
        }

        .casas-filtro {
            padding: 0 1rem 1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            margin-bottom: 1rem;
            gap: 9px;
        }

        .casas-filtro li {
            list-style: none;
            width: 32%;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #cdcdcd;
            border-radius: 5px;
        }

        .casas-filtro li.ativado {
            border: 2px solid #00c275;
            -webkit-box-shadow: 0px 0px 5px 0px rgba(0,194,117,1);
            -moz-box-shadow: 0px 0px 5px 0px rgba(0,194,117,1);
            box-shadow: 0px 0px 5px 0px rgba(0,194,117,1);
        }

        .casas-filtro button {
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0px;
            padding: 0px;
            border: 0px;
            width: 100%;
            height: 100%;
            background: #cdcdcd;
            border-radius: 5px;
        }

        .casas-filtro li img {
            width: auto;
            max-height: 35px;
            max-width: 100%;
            padding: 0px 5px;
        }

        .casas-filtro li.ativado button {
            background: #00c275;
        }

        body.dark .item-rent div span:nth-child(1), body.dark .item-rent div span:nth-child(3), body.dark .footer-filtro {
            border-color: #888ea8;
        }

        body.dark .item-rent input {
            border-top: 1px solid #888ea8;
            border-bottom: 1px solid #888ea8;
        }

        .item-rent {
            text-align: center;
            padding: 0 1rem 1rem;
        }

        .item-rent p {
            margin-bottom: 0px;
            font-weight: 600;
        }

        .item-rent div {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .item-rent span, .item-rent input {
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #cdcdcd;
            padding: 5px;
            color: #0e1726;
            font-weight: 600;
        }

        body.dark .item-rent span {
            color: #888ea8;
        }

        body.dark #modalFiltro p, body.dark #modalFiltro label {
            margin-bottom: 0px;
        }

        .item-rent input {
            background: #e4e4e4;
        }

        .item-rent input::placeholder {
            color: #0e1726;
        }

        .item-rent input {
            border-left: 0px;
            border-right: 0px;
        }

        .item-rent div span:nth-child(1) {
            border-radius: 7px 0px 0px 7px;
        }

        .item-rent div span:nth-child(3) {
            border-radius: 0px 7px 7px 0px;
        }

        .item-rent:nth-child(2) input {
            border-right: 1px solid #cdcdcd;
            border-radius: 0px 7px 7px 0px;
        }

        .area-switch {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 1rem;
        }

        body.dark .area-switch input {
            background-repeat: no-repeat !important;
        }

        .area-switch p {
            margin-bottom: 0px;
        }

        .footer-filtro {
            display: flex;
            align-items: center;
            justify-content: end;
            gap: 10px;
            padding: 10px 1rem;
            border-top: 1px solid #cdcdcd;
        }

        .footer-filtro button {
            border: none;
            padding: 5px 15px;
            border-radius: 7px;
            font-weight: 700;
            color: #fff;
        }

        .footer-filtro button:nth-child(1) {
            background: #006ac2;
        }

        .footer-filtro button:nth-child(2) {
            background-color: #00c275;
        }

        span.title-rede {
            display: block;
            padding-bottom: 10px;
            margin-bottom: 10px;
            border-bottom: 1px solid #d0d9e6;
            font-weight: 600;
        }

        body.dark span.title-rede {
            border-bottom: 1px solid #0e1726;
        }

        .item-rede span:nth-child(2) {
            font-weight: 700;
        }

        .tag-rede {
            display: flex;
            align-items: center;
            justify-content: left;
            margin: 15px 0px 15px;
        }

        .item-rede {
            background: #242535;
            padding: 1rem 1.2rem;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            font-size: 14px;
            width: 25%;
            margin: 0px 10px;
            height: 110px;
        }

        .item-rede {
            background: #cdcdcd;
        }

        .area-title-rede {
            color: #515365;
        }

        body.dark .area-title-rede {
            color: #fff;
        }

        body.dark .item-rede {
            background: #242535;
        }

        .item-rede:nth-child(1) {
            margin-left: 0px;
        }

        .item-rede:nth-child(4) {
            margin-right: 0px;
        }

        .item-rede span.quantidade {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .itens-historico {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .title-historico {
            background: #cdcdcd;
            font-weight: 700;
            text-transform: uppercase;
            padding: 1rem;
            font-size: 1rem;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
            gap: 1rem;
        }

        .title-historico p, body.dark .title-historico p {
            margin-bottom: 0px;
        }

        body.dark .title-historico, body.dark .footer-historico {
            background: #242535;
        }

        body.dark .title-historico p {
            color: #fff;
        }

        body.dark .conteudo-historico {
            background: #171721;
        }

        body.dark .conteudo-historico {
            top: 0px;
            border-radius: 10px;
        }

        .title-historico:hover {
            transition: .5s;
            background-color: rgba(0, 0, 0, 0.25);
        }

        .title-historico p:nth-child(2) {
            width: 150px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            background: #00c275;
            border: 1px solid #008b54;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            text-shadow: 0px 1px 3px #000;
            box-shadow: rgba(0, 0, 0, 0.5) 0px 0px 5px;
        }

        .title-historico p:nth-child(2):hover {
            transition: .3s;
            background: #008b54;
        }

        .conteudo-historico {
            background: #c0c0c0;
            position: relative;
            top: -8px;
            border-radius: 0px 0px 10px 10px;
        }

        .casas-historico {
            padding: 1rem 1rem 0;
        }

        .conteudo-historico li {
            display: flex;
            flex-direction: column;
            list-style: none;
            margin-bottom: 1rem;
        }

        .conteudo-historico li p {
            margin-bottom: 0px;
            font-weight: 600;
        }

        .conteudo-historico li p:nth-child(1) {
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-weight: 700;
            text-transform: uppercase;
        }

        .conteudo-historico li p:nth-child(1) span:nth-child(1)::before {
            content: '•';
            position: relative;
            margin-right: 3px;
            top: -1px;
            font-weight: 600;
        }

        .footer-historico {
            display: flex;
            justify-content: space-between;
            padding: 1rem;
            background: #cdcdcd;
            border-radius: 0px 0px 10px 10px;
        }

        .footer-historico li {
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0px;
        }

        .footer-historico li:nth-child(1) {
            border-right: 1px solid #a9a9a9;
        }

        .area-tag-calculator {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
        }

        .area-tag-calculator .item {
            background: #cdcdcd;
            padding: 1rem;
            border-radius: 10px;
            list-style: none;
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .area-tag-calculator .item p {
            margin-bottom: 0px;
        }

        .area-tag-calculator .item p:nth-child(1) {
            font-size: 1.2rem;
            font-weight: 700;
        }

        .area-tag-calculator .item p:nth-child(2) {
            font-weight: 600;
        }

        .area-tag-calculator .item i {
            font-size: 1.2rem;
            background: #888ea8;
            color: #cdcdcd;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .area-calculator {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .footer-calculator {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .footer-calculator p, .footer-calculator label {
            margin-bottom: 0px;
        }

        .footer-calculator label {
            height: 40px;
            padding: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #cdcdcd;
            border-radius: 7px 0px 0px 7px;
            color: #515365;
            font-weight: 700;
        }

        .footer-calculator p {
            font-weight: 600;
        }

        .footer-calculator div {
            display: flex;
            align-items: center;
        }

        .footer-calculator div input {
            width: 100%;
            height: 40px;
            border-radius: 0px 7px 7px 0px;
            border: 1px solid #cdcdcd;
            padding: 10px;
            border-left: none;
        }

        .footer-calculator button {
            background: #006ac2;
            color: #fff;
            border: none;
            border-radius: 7px;
            height: 40px;
            font-weight: 700;
        }

        .area-calculator .table:not(.dataTable).table-bordered thead tr th, .area-calculator .table:not(.dataTable).table-bordered > tbody > tr td {
            border: 1px solid #cdcdcd;
            margin-bottom: 0px;
            font-weight: 700;
        }

        .area-calculator .table:not(.dataTable).table-bordered thead tr th p, .area-calculator .table:not(.dataTable).table-bordered > tbody > tr td p {
            margin-bottom: 0px;
        }

        .area-calculator .table {
            margin-bottom: 0px;
            font-weight: 700;
        }

        .area-calculator .table > tbody > tr > td .progress {
            background: #cdcdcd;
        }

        .area-calculator .table > tbody > tr > td .progress .bg-primary {
            background-color: #006ac2 !important;
            border-color: #006ac2;
        }

        body.dark .area-tag-calculator .item {
            background: #1b2e4b;
        }

        body.dark .area-tag-calculator .item i {
            background: #1a1c2d;
        }

        body.dark .area-calculator p, body.dark .area-calculator label {
            margin-bottom: 0px;
        }

        body.dark .footer-calculator div input {
            background: #1b2e4b;
            border: 1px solid #191e3a;
            color: #fff;
        }

        body.dark .footer-calculator div label {
            border: 1px solid #191e3a;
        }

        .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu, body.dark .navbar .navbar-item .nav-item.user-profile-dropdown .dropdown-menu {
            padding: 10px !important;
        }

        .avatar-container {
            position: relative;
            margin-right: 15px;
        }

        .tag-drop-menu {
            display: flex;
            align-items: center;
            justify-content: center;
            position: absolute;
            right: -23px;
            top: 30%;
        }

        form.dados .input-group .input-group-text {
            height: 48.5px;
            border-radius: 6px 0px 0px 6px;
        }

        form.dados .form-control:disabled {
            border-radius: 0px 6px 6px 0px !important;
        }

        form.dados input {
            border-radius: 6px !important;
        }

        form.dados input:disabled {
            color: #3b3f5c !important;
        }

        body.dark form.dados input:disabled {
            color: #e0e6ed !important;
        }

        form.dados button {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            font-weight: 600;
        }

        .breadcrumb-item+.breadcrumb-item {
            position: relative;
            top: 1px;
            padding-left: 5px;
        }

        .breadcrumb-item+.breadcrumb-item::before {
            display: none !important;
        }

        p.title-verificar {
            font-size: 1rem;
            margin-bottom: 1rem;
            font-weight: 700;
            text-transform: uppercase;
        }

        .item-verificar {
            margin-bottom: 1rem;
        }

        .item-verificar button.title-item-veriricar {
            padding: 1rem;
            font-size: 1rem;
            text-transform: uppercase;
            font-weight: 600;
            display: flex;
            align-items: center;
            justify-content: left;
            gap: 10px;
            width: 100%;
            border-radius: 7px;
            border: 1px solid #d3d3d3;
            z-index: 1;
        }

        .item-verificar button.title-item-veriricar:hover {
            background: rgba(0, 0, 0, 0.2);
            transition: .5s;
        }

        .item-verificar button.title-item-veriricar i {
            font-size: 1.25rem;
            color: #ff0000;
        }

        .item-verificar button.title-item-veriricar i.verificado {
            color: green;
        }

        .conteudo-verificar .card.card-body {
            border-radius: 0px 0px 7px 7px;
            position: relative;
            top: -5px;
            background: transparent;
            border: 1px solid #d3d3d3;
            border-top: none;
            box-shadow: none;
        }

        .conteudo-verificar input {
            padding: 8px;
            border-radius: 7px;
            border: 1px solid #c1c2c2;
        }

        button.start-verificar {
            padding: 10px;
            border-radius: 7px;
            font-size: .9rem;
            text-transform: uppercase;
            font-weight: 700;
            margin-top: 0.625rem;
            border: none;
            background: rgba(0, 0, 0, 0.2);
        }

        button.start-verificar:hover {
            transition: .4s;
            background: rgba(0, 0, 0, 0.25);
        }

        body.dark .item-verificar button.title-item-veriricar, body.dark input {
            background: #1a1c2d;
            color: #888ea8;
            border: 1px solid #3b3f5c;
        }

        body.dark .conteudo-verificar .card.card-body {
            border: 1px solid #3b3f5c;
            border-top: none;
        }

        body.dark input {
            border: none;
        }

        body.dark input::placeholder {
            color: #888ea8;
        }

        body.dark button.start-verificar {
            color: #888ea8;
            border: 1px solid #3b3f5c;
        }

        body.dark button.start-verificar:hover {
            transition: .5s;
            background: #3b3f5c;
        }

        .menu-material {
            width: 35%;
            display: flex;
            flex-direction: column;
            gap: 10px;
            max-height: 100vh;
            overflow-y: auto;
        }

        .area-search input {
            width: 100%;
            padding: 10px;
            border-radius: 7px;
            border: 1px solid #c1c2c2;
            font-weight: 600;
        }

        .item-topico button, .item-topico a {
            width: 100%;
            display: block;
        }

        .item-topico p {
            margin-bottom: 0px;
            text-align: left;
        }

        .item-topico p:nth-child(1) {
            margin-bottom: 5px;
        }

        .aulas-topico {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 10px;
        }

        .aulas-topico a {
            background: rgba(0, 0, 0, 0.15);
            border-radius: 5px;
            padding: 1rem;
        }

        .aulas-topico a:hover {
            transition: .3s;
            background: rgba(0, 0, 0, 0.2);
        }

        .aulas-topico a p:nth-child(1) {
            font-weight: 700;
        }

        .aulas-topico a p:nth-child(2) {
            font-size: 12px;
        }

        .item-topico {
            padding: 10px;
            background: #fff;
            border-radius: 7px;
            border: 1px solid #c1c2c2;
        }

        .item-topico button {
            font-weight: 700 !important;
            background-color: rgba(0, 0, 0, 0.15) !important;
            color: #fff;
        }

        .item-topico button:hover {
            background-color: rgba(0, 0, 0, 0.2) !important;
        }

        .box-aulas {
            display: flex;
            position: relative;
        }

        .box-aulas-principal .aula-not {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: url("../img/bg-aulas.png");
            border-radius: 7px;
        }

        .box-aulas-principal {
            width: 80%;
            padding: 0 1rem;
            border-left: 1px solid #d7e0ea;
            margin-left: 1rem;
        }

        .box-aulas-principal .aula-not {
            min-height: 350px;
        }

        .box-aulas-principal .aula-not p {
            margin-bottom: 0px;
            padding: 1rem;
            background: #0e1726;
            color: #e0e6ed;
            font-weight: 700;
            border-radius: 7px;
        }

        p.title-id-aula {
            font-size: 1rem;
            font-weight: 700;
            margin-bottom: 1rem;
            padding-bottom: 10px;
            border-bottom: 1px solid #d7e0ea;
        }

        .area-video iframe {
            width: 100%;
            border-radius: 7px;
        }

        .area-descricao .area-controls {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 5px;
            margin-top: 10px;
        }

        .area-descricao .area-controls button {
            width: 50%;
            padding: 10px;
            border-radius: 7px;
            background: transparent;
            border: 1px solid #c1c2c2;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            color: #515365;
            font-weight: 600;
        }

        .area-descricao .area-controls button:hover {
            transition: .3s;
            background: rgba(0, 0, 0, 0.15) !important;
        }

        p.titulo-aula-item {
            font-size: 1.2rem;
            font-weight: 600;
            margin: 1rem 0;
        }

        .area-title-descricao {
            margin-bottom: 1rem;
        }

        .area-title-descricao button {
            border: 1px solid #c1c2c2;
            border-radius: 7px;
            padding: 5px 20px;
        }

        .area-title-descricao button p {
            margin-bottom: 0px;
        }

        .area-title-descricao button:hover {
            transition: .3s;
            background: rgba(0, 0, 0, 0.15) !important;
        }

        .area-conteudo-descricao p {
            padding: 0 1rem 1rem 0;
            margin-bottom: 0px;
        }

        body.dark .item-topico {
            background: #1a1c2d;
            border: none;
        }

        body.dark p.title-id-aula, body.dark .box-aulas-principal, body.dark .area-descricao .area-controls button {
            border-color: #0e1726;
        }

        body.dark p.titulo-aula-item {
            margin: 1rem 0px;
        }

        body.dark .area-title-descricao button {
            background: transparent;
            border-color: #0e1726;
        }

        .box-tutorial-mobile {
            display: none;
        }

        body.dark .item-topico p:nth-child(2) {
            margin-bottom: 0px;
        }

        button#botao-menu {
            position: absolute;
            top: -5px;
            right: 2rem;
            font-size: 1.2rem;
            border: none;
            color: #888ea8;
            background: #212837;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            display: none;
        }

        @media (min-width: 991px) {
            .sidebar-wrapper {
                width: 220px !important;
                top: 130px !important;
            }
        }

        @media (max-width: 990px) {
            .area-filtros {
                position: relative;
                right: 8px;
            }
            .menu-material {
                position: absolute;
                top: -20px;
                left: 0px;
                background: #d9d9d9;
                padding: 1rem;
                border-radius: 0px 0px 10px 10px;
                height: 100vh;
                overflow-y: auto;
                width: 300px;
                border: 1px solid #d7e0ea;
                z-index: 2;
                -webkit-box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.4);
                -moz-box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.4);
                box-shadow: 5px 5px 5px 0px rgba(0,0,0,0.4);
                display: none;
                transition: .3s;
            }
            body.dark .menu-material {
                background: #0e1726;
                border: 1px solid #212837;
            }
            .box-aulas-principal {
                width: 100%;
                margin-left: 0px;
            }
            button#botao-menu{
                display: block;
            }
            button#botao-menu i {
                position: relative;
                top: 2px;
            }
            .menu-material.ativo {
                display: flex;
            }

        }

        @media (max-width: 900px) {
            .tag-rede {
                flex-wrap: wrap;
            }
            .item-rede {
                width: 49%;
                margin: 0.5% !important;
            }
        }

        @media (max-width: 650px) {
            .area-operacoes .itens-operacoes, span.odd input {
                width: 100%;
            }
            .area-operacoes .itens-tutorial {
                width: 20%;
                min-width: 120px;
            }
            .header-item-op {
                flex-direction: column;
                justify-content: center;
                gap: 5px;
                padding: 10px;
            }
            .body-item-op {
                flex-direction: column;
                gap: 1rem;
            }
            .body-item-op .left {
                display: flex;
                flex-direction: column;
                justify-content: left;
                width: 100%;
            }
            .footer-item-op {
                flex-direction: column;
            }
            button.btn-calc-op, span.lucro-op {
                width: 100%;
                justify-content: center;
            }
            span.lucro-op {
                border-radius: 0px;
            }
            button.btn-calc-op {
                border-radius: 0px 0px 10px 10px;
            }
            .body-item-op .right, .body-item-op .right div {
                width: 100%;
            }
            img.logo-casa-op {
                height: auto;
                width: 75px;
            }
            .box-logo-casa-op {
                display: flex;
                align-items: center;
                justify-content: center;
                background: #cdcdcd;
                border-radius: 0px 0px 10px 10px;
            }
            .box-tutorial {
                background-position: center;
                background-size: contain;
                background: #1a1c2d;
            }
            .box-tutorial:hover {
                background: #1a1c2d;
            }
            .box-tutorial button {
                display: block;
            }
            .header-item-op img {
                width: 20px;
            }
            .header-item-op, .body-item-op {
                font-size: 12px;
            }
            .area-operacoes {
                margin-top: 0px;
                padding: 0px !important;
            }
            .area-operacoes .itens-tutorial {
                display: none;
            }
            .box-tutorial-mobile {
                display: block;
            }
            .item-op {
                margin-bottom: 10px;
            }
            .box-tutorial-mobile button {
                width: 100%;
                padding: 5px 10px;
                margin-bottom: 1rem;
                border-radius: 10px;
                border: 1px solid;
                position: relative;
                top: -5px;
                font-size: 14px;
                font-weight: 700;
                background: #006ac2;
                color: #fff;
                border: none;
            }
            .body-item-op .left p:nth-child(5), .body-item-op .left p:nth-child(6) {
                position: relative;
                padding-left: 15px;
            }
            .body-item-op .left p:nth-child(5)::before, .body-item-op .left p:nth-child(6)::before {
                content: "";
                position: absolute;
                left: 0;
                top: 50%;
                transform: translateY(-50%);
                width: 4px;
                height: 4px;
                border-radius: 50%;
                background-color: black;
            }
        }

        @media (max-width: 500px) {
            .area-tag-calculator {
                flex-direction: column;
            }
            .area-tag-calculator .item {
                width: 100%;
            }
        }

        @media (max-width: 450px) {
            .area-historico {
                margin-top: 1rem;
            }
            .item-rede {
                width: 100%;
                margin: 0px !important;
                margin-bottom: 10px !important;
            }
            .item-casa {
                flex-direction: column;
                justify-content: center;
                width: 100%;
                gap: 5px;
                padding: 10px;
                border: 1px solid #888ea8;
                border-radius: 10px;
            }
            .item-casa li:nth-child(1)::after, .area-resultado-final .title::before,.item-casa li:nth-child(2)::after, .area-resultado-final .title::after {
                display: none;
            }
            .area-casas li {
                width: 100% !important;
            }
            body.dark .area-casas li:nth-child(2) span {
                border: 1px solid #888ea8;
            }
            p.title-calc {
                padding: 1rem 3rem;
            }
            .footer-resultado-final {
                margin-top: 1rem;
                flex-direction: column;
            }
            .footer-resultado-final li {
                width: 100%;
                margin: 10px;
            }
            .area-input {
                flex-direction: column;
            }
            .area-input .investir, .area-input .retorno {
                width: 100%;
            }
            .area-input .investir input {
                background-color: transparent;
            }
            .area-input .investir {
                border: 1px solid #888ea8;
            }
        }

        @media (max-width: 400px) {
            .footer-item-op {
                font-size: 12px;
            }
            span.lucro-op {
                flex-direction: column;
                height: 40px;
                gap: 0px;
                position: relative;
                padding: 0px;
            }
        }

        @media (max-width: 380px) {
            p.title-filtro {
                padding: 1rem 3rem;
            }
            .item-rent:nth-child(1) input {
                width: 30%;
            }
            img.logo-principal {
                height: 60px !important;
                position: relative;
                left: -10px;
            }
            ul.navbar-item.flex-row.ms-lg-auto.ms-0.action-area {
                transform: scale(.8);
                position: relative;
                right: -10px;
            }
            .search-animated.toggle-search {
                transform: scale(.8);
                margin: 0px !important;
                position: relative;
                left: 35px;
            }
            header.header.navbar {
                justify-content: space-between;
                gap: 0px !important;
                flex-wrap: nowrap;
            }
        }

        @media (max-width: 350px) {
            .header-item-op, .body-item-op {
                font-size: 10px;
            }
        }

        @media (max-width: 340px) {
            .search-animated.toggle-search {
                left: 15px !important;
            }
            ul.navbar-item.flex-row.ms-lg-auto.ms-0.action-area {
                right: 0px !important;
            }
        }

        @media (max-width: 320px) {
            .search-animated.toggle-search {
                left: 5px !important;
            }
            ul.navbar-item.flex-row.ms-lg-auto.ms-0.action-area {
                right: 15px !important;
            }
        }
    </style>



        <style>
            #sidebar ul.menu-categories.ps {
                margin-top: 0px !important;
            }
            .area-casas .area-odd div img {
                height: 25px !important;
            }
            .layout-top-spacing {
                margin-top: 10px !important;
            }
            @media(max-width: 900px) {
                .layout-top-spacing {
                    margin-top: 10px !important;
                }
            }
            @media(max-width: 500px) {
                div#content {
                    margin-top: 100px !important;
                }
            }
            label.form-check-label {
                position: relative;
                top: 5px;
                left: 10px;
            }

            .area-operacoes .itens-operacoes {
                width: 100%;
            }

            #accordionExample{

                margin-top: 0%;

            }

        </style>

        <div class="row layout-top-spacing">
            <div class="area-filtros">
                <button type="button" data-bs-toggle="modal" data-bs-target="#modalFiltro">
                    <span>Filtrar</span>

                    <i class="fa-solid fa-list"></i>
                </button>
            </div>

            <div class="area-operacoes">
                <div class="itens-operacoes">
                    <p>Operação</p>

                    @foreach($tips_array as $key => $tip)

                    @if(count($tip[0]) >= 8)

                    <div class="item-op">
                        <div class="header-item-op">
                            <div>
                                <a href="{{ route('newSinal', [
                                    'casa_01' => $tip[0][2],
                                    'casa_02' => $tip[1][0],
                                    'odd_01' => $tip[0][6],
                                    'odd_02' => $tip[1][4],
                                    'evento' => $tip[0][4],
                                    'mercado_01' => $tip[0][5],
                                    'mercado_02' => $tip[1][3],
                                    'data' => $tip[0][3],
                                    'lucro' => $tip[0][1],
                                ]) }}">
                                    <img src="{{ asset('assets/img/futebol.png') }}" alt="icone-op" width="30px">
                                </a>
                                <span class="title-liga">
                                    @if(isset($tip[0][4]))
                                        {{ $tip[0][4] }}
                                    @endif
                                </span>
                            </div>
                            <div>
                                <span>
                                    @if(isset($tip[0][3]))
                                        {{ $tip[0][3] }}
                                    @endif
                                </span>
                            </div>
                        </div>

                        <div class="body-item-op">
                            <div class="left">
                                <p><a href="{{ 0 }}" target="_blank">{{ $tip[0][2] ?? 0}}</a></p>
                                <p><a href="{{ 0 }}" target="_blank">{{ $tip[1][0] ?? 0}}</a></p>

                                @if(isset($tip[0][4]))
                                    <p>
                                    @php
                                    $texto = explode(' – ', $tip[0][4])[1] ?? "nao encontrado";
                                    echo explode("/n", $texto)[0];
                                    @endphp
                                    </p>
                                @endif

                                <p>{{ $tip[0][5] ?? 0}} <br> {{ $tip[1][3] ?? 0}}</p>
                            </div>
                            <div class="right">
                                <div>
                                    <span>Odds 01:</span>

                                    <span class="odd">
                                        <input class="odd" type="text" id="valora{{ $key }}" value="{{ $tip[0][6] }}">
                                    </span>
                                </div>

                                <div>
                                    <span>Odds 02:</span>

                                    <span class="odd" id="valor02">
                                        <input class="odd" type="text" id="valorb{{ $key }}" value="{{ $tip[1][4] }}">
                                    </span>
                                </div>



                            </div>
                        </div>

                        <div class="footer-item-op">
                            <div class="tag-triang"></div>

                            <span class="lucro-op">
                                <strong>
                                    {{ $tip[0][1] }}
                                </strong>

                                LUCRO GARANTIDO
                            </span>

                            <button class="btn-calc-op" type="button" data-bs-toggle="modal" data-bs-target="#modalCalculadora" onclick="calc('valora{{ $key }}', 'valorb{{ $key }}', '{{ json_encode(explode(' – ', $tip[0][4])[1]) }}', '{{ json_encode(explode(' – ', $tip[0][4])[1]) }}', '{{ json_encode($tip[0][3]) }}')">
                                <span>CALCULAR</span>

                                <i class="fa-solid fa-calculator"></i>
                            </button>
                        </div>
                    </div>

                    @endif
                    @endforeach


                </div>


            </div>
        </div>
    @endsection

    <script>
       function calc(vall01, vall02, casa, visitante, quando){

            const str1 = document.getElementById(vall01).value;
            const valor01 = parseFloat(str1.replace(",", "."));

            const str2 = document.getElementById(vall02).value;
            const valor02 = parseFloat(str2.replace(",", "."));

            var investido_total = document.getElementById("valor-investir").value;

            var soma = (1/valor01) + (1/valor02)

            var Operação01 = ((1/valor01) / soma) * 100;
            var Operação02 = ((1/valor02) / soma) * 100;

            var investido01 = (investido_total * Operação01) / 100;
            var investido02 = (investido_total * Operação02) / 100;

            var lucro = (investido01 * valor01)

            document.getElementById("odds01").innerText = valor01;
            document.getElementById("odds02").innerText = valor02;

            document.getElementById("casa").innerText = casa;
            document.getElementById("visitante").innerText = visitante;
            document.getElementById("dataEvento").innerText = quando;

            document.getElementById("porc01").innerText = Operação01.toFixed(2)+'%';
            document.getElementById("porc02").innerText = Operação02.toFixed(2)+'%';

            document.getElementById("invest01").innerText = 'R$ '+investido01.toFixed(2);
            document.getElementById("invest02").innerText = 'R$ '+investido02.toFixed(2);
            //document.getElementById("invest03").innerText = 'R$ '+investido03.toFixed(2);

            document.getElementById("aposta").innerText = 'R$ '+investido_total;
            document.getElementById("volta").innerText = 'R$ '+(lucro - investido_total).toFixed(2);



            document.getElementById("lucro").innerText = 'R$ '+lucro.toFixed(2);
            document.getElementById("lucro_porc").innerText = ((100 * (lucro - investido_total)) / investido_total).toFixed(2) +' %';


            console.log(investido_total)
            }
    </script>

