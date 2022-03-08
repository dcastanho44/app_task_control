<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Controle de Tarefa')
<img src="https://localhost:8000/img/logo.png" class="logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
