<style>
    .widget-content-area h3 {
        position: relative;
        font-size: 21px;
        color: #bfc9d4;
        margin: 0px 0px 25px 0;
    }
</style>

<div class="widget-content widget-content-area">
    <h3>Indique seus amigos</h3>
    
    <div class="clipboard copy-txt">
        <p style="margin-bottom: 20px !important;">
            <span id="advanced-paragraph">{{ route('registerAffiliate', ['id' => $AuthUser->id]) }}</span>
        </p>
        
        <a class="mb-2 btn btn-primary" href="javascript:;" data-clipboard-action="copy" data-clipboard-target="#advanced-paragraph">Copiar link</a>
        <a class="mb-2 btn btn-warning" href="javascript:;" data-clipboard-action="copy" data-clipboard-text="ctrlser">Copiar codigo</a>
    </div>
</div>

<hr>