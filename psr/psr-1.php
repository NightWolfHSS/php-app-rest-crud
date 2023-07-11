<?php echo "psr1"; ?>
<!-- PSR-1 (PHP Standard Recommendation 1) - это рекомендация по стандартам кодирования в PHP. Она определяет базовые правила именования классов, файлов, методов и констант, а также правила организации исходного кода. Соблюдение PSR-1 обеспечивает единообразие и читаемость кода, что упрощает его сопровождение и совместную разработку.

Вот основные рекомендации PSR-1:

Именование файлов:

Имена файлов PHP должны быть в нижнем регистре.
Имена файлов должны соответствовать именам классов.
Именование классов:

Имена классов должны быть в формате CamelCase (верблюжьего регистра).
Имена классов должны начинаться с заглавной буквы.
Каждый новый слово в имени класса должно начинаться с заглавной буквы.
Именование методов и функций:

Имена методов и функций должны быть в формате camelCase.
Имена методов и функций должны начинаться с строчной буквы.
Каждый новый слово в имени метода или функции должно начинаться с заглавной буквы.
Именование констант:

Имена констант должны быть в верхнем регистре.
Имена констант должны разделяться символом подчеркивания (_) в качестве разделителя слов.
Автозагрузка классов:

Классы должны быть загружены с использованием стандартной автозагрузки классов PSR-4.
Вот пример кода, соответствующего рекомендациям PSR-1:

php
Copy code -->
<?php

namespace MyApp;

class MyClass
{
    const MY_CONSTANT = 'value';

    public function myMethod()
    {
        // код метода
    }
}

/*В этом примере мы следуем рекомендациям PSR-1:

Имя файла (MyClass.php) соответствует имени класса (MyClass).
Имя класса (MyClass) написано в CamelCase с заглавной буквы.
Имя метода (myMethod) написано в camelCase с строчной буквы.
Имя константы (MY_CONSTANT) написано в верхнем регистре с разделителем слов (_).
Соблюдение стандартов PSR-1 способствует единообразию кода в проектах на PHP и упрощает его чтение, понимание и совместную разработку.*/