<tr data-toggle="Load">
    <td class="col-md-2 text-center"><img src="{$url}" style="width: 50px"></td>
    <td class="col-md-6">{$name}</td>
    <td class="col-md-2"><span class="label label-success">Файл загружен</span></td>
    <td class="text-right col-md-2"><button type="button" data-toggle="removeLoadFiles" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
    <input type="hidden" value="{$name}" name="{$input}[]">
</tr>