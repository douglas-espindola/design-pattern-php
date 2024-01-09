<?php

namespace DesignPatterns\Comportamentais\Memento;

class TextBox
{
    private int $x;
    private int $y;
    private string $text;
    private string $fontFamily;
    private int $fontSize;
    private string $textAlign;
    private string $fontWeight;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
        $this->text = '';
        $this->fontFamily = 'Arial';
        $this->fontSize = 14;
        $this->textAlign = 'left';
        $this->fontWeight = 'normal';
    }

    public function imprimir(): void
    {
        echo "<div style='margin-left: {$this->x}px; margin-top: {$this->y}px;'>
              <span style='font-size: {$this->fontSize}px; font-family: $this->fontFamily; font-weight: $this->fontWeight'>
                $this->text
              </span>
              </div>";
    }

    public function setPosition(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function setText(string $text): void
    {
        $this->text = $text;
    }

    public function setFontFamily(string $fontFamily): void
    {
        $this->fontFamily = $fontFamily;
    }

    public function setFontSize(int $fontSize): void
    {
        $this->fontSize = $fontSize;
    }

    public function setTextAlign(string $textAlign): void
    {
        $this->textAlign = $textAlign;
    }

    public function setFontWeight(string $fontWeight): void
    {
        $this->fontWeight = $fontWeight;
    }
}
