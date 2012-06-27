
<form method="POST" class="ajaxForm dynaForm" action="<?=site_url('etapas/ejecutar_form/'.$etapa->id.'/'.$paso)?>">    
    <fieldset>
        <div class="validacion"></div>
        <legend><?=$etapa->Tarea->Pasos[$paso]->Formulario->nombre?></legend>
        <?php foreach($etapa->Tarea->Pasos[$paso]->Formulario->Campos as $c):?>
            <div class="campo" data-id="<?=$c->id?>" <?=$c->dependiente_campo?'data-dependiente-campo='.$c->dependiente_campo:''?> <?=$c->dependiente_valor?'data-dependiente-valor='.$c->dependiente_valor:''?> >
            <?=$c->displayConDato($etapa->Tramite->id,$etapa->Tarea->Pasos[$paso]->modo)?>
            </div>
        <?php endforeach ?>
        <div class="form-actions">
            <?php if ($paso>0): ?><a class="btn" href="<?=site_url('etapas/ejecutar/'.$etapa->id.'/'.($paso-1))?>"><i class="icon-chevron-left"></i> Volver</a><?php endif; ?>
            <button class="btn btn-primary" type="submit">Siguiente</button>
        </div>
    </fieldset>
</form>