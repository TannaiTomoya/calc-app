<?php

use function Livewire\Volt\{state, computed};

state(['num1', 'operator', 'num2']);

$result = computed(function () {
    $operators = [
        'addition' => '+',
        'subtraction' => '-',
        'multiplication' => '×',
        'division' => '÷',
    ];

    if (!isset($operators[$this->operator])) {
        return "{$this->num1} ? {$this->num2} = 無効な演算子です";
    }

    $symbol = $operators[$this->operator];
    
    $value = match($this->operator) {
        'addition' => $this->num1 + $this->num2,
        'subtraction' => $this->num1 - $this->num2,
        'multiplication' => $this->num1 * $this->num2,
        'division' => $this->num2 != 0 
            ? $this->num1 / $this->num2 
            : 'エラー（0除算）',
        default => null,
    };

    return "{$this->num1} {$symbol} {$this->num2} = {$value}";
});

?>

<div>
    <h1>計算結果</h1>
    <p>{{ $this->result }}</p>
</div>

