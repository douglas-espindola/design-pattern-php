<?php

namespace DesignPatterns\Criacionais\Builder;

class GeradorPDF
{
    private string $pageOrientation = 'portrait';
    private string $unit = 'mm';
    private int $PageSizeX = 210;
    private int $PageSizeY = 297;
    private int $marginTop = 30;
    private int $marginRight = 20;
    private int $marginBottom = 30;
    private int $marginLeft = 20;
    private bool $hasHeader = false;
    private int $headerHeigh = 0;
    private bool $hasFooter = false;
    private int $footerHeigh = 0;
    private string $pageColor = '#ffffff';
    private string $encode = 'UTF-8';

    public function __construct (
        string $pageOrientation,
        string $unit,
        int $PageSizeX,
        int $PageSizeY,
        int $maginTop,
        int $maginRight,
        int $maginBottom,
        int $maginLeft,
        bool $hasHeader,
        int $headerHeigh,
        bool $hasFooter,
        int $footerHeigh,
        string $pageColor,
        string $encode
    ) {
        $this->pageOrientation = $pageOrientation;
        $this->unit = $unit;
        $this->PageSizeX = $PageSizeX;
        $this->PageSizeY = $PageSizeY;
        $this->marginTop = $maginTop;
        $this->marginRight = $maginRight;
        $this->marginBottom = $maginBottom;
        $this->marginLeft = $maginLeft;
        $this->hasHeader = $hasHeader;
        $this->headerHeigh = $headerHeigh;
        $this->hasFooter = $hasFooter;
        $this->footerHeigh = $footerHeigh;
        $this->pageColor = $pageColor;
        $this->encode = $encode;
    }

    public function getPageOrientation(): string
    {
        return $this->pageOrientation;
    }

    public function setPageOrientation(string $pageOrientation): void
    {
        $this->pageOrientation = $pageOrientation;
    }

    public function getUnit(): string
    {
        return $this->unit;
    }

    public function setUnit(string $unit): void
    {
        $this->unit = $unit;
    }

    public function getPageSizeX(): int
    {
        return $this->PageSizeX;
    }

    public function setPageSizeX(int $PageSizeX): void
    {
        $this->PageSizeX = $PageSizeX;
    }

    public function getPageSizeY(): int
    {
        return $this->PageSizeY;
    }

    public function setPageSizeY(int $PageSizeY): void
    {
        $this->PageSizeY = $PageSizeY;
    }

    public function getMarginTop(): int
    {
        return $this->marginTop;
    }

    public function setMarginTop(int $marginTop): void
    {
        $this->marginTop = $marginTop;
    }

    public function getMarginRight(): int
    {
        return $this->marginRight;
    }

    public function setMarginRight(int $marginRight): void
    {
        $this->marginRight = $marginRight;
    }

    public function getMarginBottom(): int
    {
        return $this->marginBottom;
    }

    public function setMarginBottom(int $marginBottom): void
    {
        $this->marginBottom = $marginBottom;
    }

    public function getMarginLeft(): int
    {
        return $this->marginLeft;
    }

    public function setMarginLeft(int $marginLeft): void
    {
        $this->marginLeft = $marginLeft;
    }

    public function getHasHeader(): bool
    {
        return $this->hasHeader;
    }

    public function setHasHeader(bool $hasHeader): void
    {
        $this->hasHeader = $hasHeader;
    }

    public function getHeaderHeigh(): int
    {
        return $this->headerHeigh;
    }

    public function setHeaderHeigh(int $headerHeigh): void
    {
        $this->headerHeigh = $headerHeigh;
    }

    public function getHasFooter(): bool
    {
        return $this->hasFooter;
    }

    public function setHasFooter(bool $hasFooter): void
    {
        $this->hasFooter = $hasFooter;
    }

    public function getFooterHeigh(): int
    {
        return $this->footerHeigh;
    }

    public function setFooterHeigh(int $footerHeigh): void
    {
        $this->footerHeigh = $footerHeigh;
    }

    public function getPageColor(): string
    {
        return $this->pageColor;
    }

    public function setPageColor(string $pageColor): void
    {
        $this->pageColor = $pageColor;
    }

    public function getEncode(): string
    {
        return $this->encode;
    }

    public function setEncode(string $encode): void
    {
        $this->encode = $encode;
    }

    public function __toString(): string
    {
        $saida = '';
        $saida .= 'pageOrientation: ' . $this->getPageOrientation() . '<br>';
        $saida .= 'unit: ' . $this->getUnit() . '<br>';
        $saida .= 'PageSizeX: ' . $this->getPageSizeX() . 'mm<br>';
        $saida .= 'PageSizeY: ' . $this->getPageSizey() . 'mm<br>';
        $saida .= 'maginTop: ' . $this->getMarginTop() . 'mm<br>';
        $saida .= 'maginRight: ' . $this->getMarginRight() . 'mm<br>';
        $saida .= 'maginBottom: ' . $this->getMarginBottom() . 'mm<br>';
        $saida .= 'maginLeft: ' . $this->getMarginLeft() . 'mm<br>';
        $saida .= $this->getHasHeader() ? 'hasHeader: Sim<br>' : 'hasHeader: Não<br>';
        $saida .= 'headerHeigh: ' . $this->getHeaderHeigh() . 'mm<br>';
        $saida .= $this->getHasFooter() ? 'hasFooter: Sim<br>' : 'hasFooter: Não<br>';
        $saida .= 'footerHeigh: ' . $this->getFooterHeigh() . 'mm<br>';
        $saida .= 'pageColor: ' . $this->getPageColor() . '<br>';
        $saida .= 'encode: ' . $this->getEncode() . '<br>';

        return $saida;
    }
}
