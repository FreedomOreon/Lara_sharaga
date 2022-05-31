@extends('layouts.app')

@section('content')
<div style="display: flex;flex-direction: column;align-items: center;">
    <h1>Корзина</h1>
    
    <table class="tftable">
        <tr><th>Название товара</th><th>Цена товара</th><th>Количество товара</th><th>Статус товара</th>
        <tr><td>Черепашка 1</td><td>57 Р</td><td>12</td><td>Завершен</td>
        <tr><td>Черепашка 2</td><td>53 Р</td><td>12</td><td>Отменен</td>
        <tr><td>Черепашка 3</td><td>22 Р</td><td>12</td><td>Отменен</td>
        <tr><td>Черепашка 4</td><td>13 Р</td><td>12</td><td>Завершен</td>
    </table>
</div>


@endsection

