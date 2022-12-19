<?php
//* Разработайте механизм корзины интернет-магазина.
//Реализуйте класс продукта (Product) со свойствами title (string),
//price (float) и components (массив объектов Product),
//и соответствующие методы для взаимодействия со свойствами.
//Свойство components служит для реализации товара-наборов (например, комплект клавиатура+мышь) и в случае,
//если экземпляр содержит компоненты, стоимость этого комплекта должна быть равна сумме стоимостей её компонентов.
//Разработайте класс корзины (Cart) с методами для добавления, удаления товаров,
//а также с методом вычисления полной стоимости корзины, с учётом того,
//что некоторые товары могут представлять из себя комплекты других товаров.

require_once "cart.php";
$keyboard = new Product('Клавиатура проводная Red Square Keyrox TKL [RSQ-20030]',5000);

$mouse = new Product('Мышь беспроводная Xiaomi Dual Mode Wireless Mouse Silent Edition черный', 1500);

$accessories= new Product('ПК');
$accessories->setComponents([$mouse, $keyboard]);
$monitor = new Product('27" Монитор Xiaomi Mi 2K Gaming Monitor черный', 60000);

$cart = new Cart();
$cart->addProduct($accessories);
$cart->addProduct($monitor);
$cart->addProduct($mouse);

echo($cart->getFullPrice());