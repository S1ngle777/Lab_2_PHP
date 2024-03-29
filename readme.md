# Лабораторная работа №2

## Инструкции по запуску проекта
1) Склонируйте репозиторий с проектом: git clone [https://github.com/S1ngle777/Lab_2_PHP.git](https://github.com/S1ngle777/Lab_2_PHP.git).
2) Запустите веб-сервер: php -S localhost:8080.
3) Откройте браузер и перейдите по адресу http://localhost:8080 для доступа к первому заданию.
4) Перейдите по адресу http://localhost:8080/task2.php для доступа ко второму заданию.
5) Перейдите по адресу http://localhost:8080/operator.php для доступа к третьему и четвёртому заданию.
6) Перейдите по адресу http://localhost:8080/homework.php для доступа к домашнему заданию.

## __Задания__
__Задание 1.__
1. Создайте файл index.php, который содержит
следующий код:

```php
<?php
$nume = 'Иванов';
$prenume = 'Николай';
echo 'Фамилия клиента '.$nume. ', а его имя '
.$prenume . '.';
$varsta = 30;
print '<br />Возраст клиента ' .$varsta .'.';
```

2. Анализируйте скрипт и объясните, что он
реализуют.
3. Сохраните файл.
4. Запустите веб сервер.
5. Интерпретируйте скрипт index.php используя
виртуальный адрес скрипта.
6. Проанализируйте результат.

__Задание 2.__
1. Добавьте в созданный файл index.php,
следующий скрипт:

```php
<?php
$d=date("D");
if ($d=="Fri")
echo "<br />Хороших вам выходных!";
else
 echo "<br />Приятного рабочего дня,
вам!";
?>
```

2. Сохраните и интерпретируйте скрипт.
3. Проанализируйте результат.
4. Замените if…else на тернарный оператор.
Анализируйте полученный результат.
5. Комментируйте использование тернарного
оператора, оставив if…else и правильно
добавьте следующий скрипт:

```php
…elseif ($d=="Sun")
 echo "<br />Завтра начинается новая рабочая
неделя!"; …
```

7. Сохраните и интерпретируйте скрипт.
8. Проанализируйте результат.
9. Посмотрите
http://php.net/manual/en/function.date.php, и
замените буквенный параметр дня недели
на цифровой в предыдущий скрипт (w – 0-6)
10. Сохраните и интерпретируйте скрипт.
11. Проанализируйте полученный результат.
12. Измените условие так что бы вы обработали
текущий день недели и выведите
соответствующее сообщение на экран.

__Задание 3.__
1. Создайте файл operator.php, который
содержит обработку данных оператором if и
тернарным оператором.

```php
<?php
//пример с if
$varsta = 22;
if (($varsta > 12) && ($varsta < 20)) {
$mesaj=" вы подросток!";
} elseif ($varsta > 40) {
$mesaj=" вы взрослый человек!";
} else {
$mesaj=" вы в рассвете сил ...
приступайте к работе!";
}
//тернарный оператор
$nume = "Аня";
echo ($nume) ? $nume.', '.$mesaj : 'Anonymous,
'.$mesaj;
?>
```

2. Проанализируйте скрипт и объясните что он
реализует.
3. Сохраните файл и запустите скрипт.
4. Проанализируйте результат.
5. Прокомментируйте строку в которой ставится
в соответствие значение переменной nume.
Интерпретируйте скрипт. Что вы заметили?

__Задание 4.__
Используя switch () и функцию date(), с
соответствующим параметром, проверьте
день недели и выведите на русском:
«Сегодня, день недели, дд.мм.гг» 

__Домашнее задание__
Используя функцию „date()” из PHP и HTML
элементы для создания таблиц, создайте
таблицу с следующим контентом:

![image](https://github.com/S1ngle777/Lab_2_PHP/assets/128795707/9b865f29-8819-4c2d-a518-044f45fb0bb3)

Вместо xx-xx, выведите 8:00-12:00, если день
недели понедельник, среда или пятница. В
обратном случае выведите „Нерабочий день”.
Вместо yy-yy, выведите 12:00-16:00, если день
недели вторник, четверг или суббота. В
обратном случае выведите „Нерабочий день”.
2. К следующей паре, каждый готовит свой
собственный пример с использованием
команд и операторов которые мы изучали.

## Примеры использования

__Задание 1.__

![image](https://github.com/S1ngle777/Lab_2_PHP/assets/128795707/0fb97b27-1fca-41b8-94bc-dd225f502bd3)

__Задание 2.__

![image](https://github.com/S1ngle777/Lab_2_PHP/assets/128795707/a7d53fb3-098f-4ca7-91a3-ed3c211ecb2f)

__Задание 3.__
Данный скрипт реализует вывод текста при определённом значений переменной $varsta. В тернарном операторе, при комментировании переменной $nume вызывается значение при при условие ложно, так как передаётся 0.

![image](https://github.com/S1ngle777/Lab_2_PHP/assets/128795707/203a69ca-dbe4-466a-82f7-4d83e5cc11ab)

![image](https://github.com/S1ngle777/Lab_2_PHP/assets/128795707/d183ca80-b769-40ac-9dc1-0f3b87900b74)

__Задание 4.__

![image](https://github.com/S1ngle777/Lab_2_PHP/assets/128795707/c14ab116-2f11-418e-bf48-14db3493ede8)

__Домашнее задание__

![image](https://github.com/S1ngle777/Lab_2_PHP/assets/128795707/836202d8-5e59-4811-a1dc-94059b39967f)


Для своего примера, использовал все операторы и команды, что были изучены.
В зависимости от дня недели и времени выводится разный текст.

![image](https://github.com/S1ngle777/Lab_2_PHP/assets/128795707/2c4250a8-2a0d-44f6-976c-4a548715ae99)

![image](https://github.com/S1ngle777/Lab_2_PHP/assets/128795707/5edc5a9a-3c82-4960-b497-d640258001f6)

## Список использованных источников
[https://www.w3schools.com/php/func_date_date.asp](https://www.w3schools.com/php/func_date_date.asp)
