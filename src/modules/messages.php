<?php

function printMessage($message) {
    if ($message=='success-create')
        return '<span class="text-success">Registro completo com sucesso!</span>';
    if ($message=='error-create')
        return '<span class="text-error">Erro ao criar registro.</span>';

    if ($message=='success-remove')
        return '<span class="text-success">Registro removido com sucesso!</span>';
    if ($message=='error-remove')
        return '<span class="text-error">Erro ao remover registro.</span>';

    if ($message=='success-update')
        return '<span class="text-success">Registro atualizado com sucesso!</span>';
    if ($message=='error-update')
        return '<span class="text-error">Erro ao atualizar registro.</span>';
}
