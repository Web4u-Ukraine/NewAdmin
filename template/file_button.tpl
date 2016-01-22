<tr>
    <td class="col-md-8">{$name}</td>
    <td class="col-md-2">
        <span class="label label-success">Файл загружен</span>
    </td>
    <td class="text-right col-md-2">
        <a href="{$url}" class="btn fancy btn-info btn-sm"><i class="fa fa-eye"></i></a>&nbsp;
        <button type="button" data-toggle="removeLoadFiles" class="btn btn-error btn-sm"><i class="fa fa-trash"></i></button>
        <input type="hidden" value="{$name}" name="{$input}[]">
    </td>
</tr>