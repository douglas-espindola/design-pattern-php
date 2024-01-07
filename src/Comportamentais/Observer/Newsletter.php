<?php

    namespace DesignPatterns\Comportamentais\Observer;

    class Newsletter implements Subject
    {
        protected array $observers;
        protected array $mensagem;
        public function registerObserver(Observer $observer): void
        {
            $this->observers[] = $observer;
        }

        public function removeObserver(Observer $observer): void
        {
            foreach ($observer as $key => $observerInArray){
                if($observerInArray === $observer){
                    unset($this->observers[$key]);
                }
            }
        }

        public function notifyObservers(): void
        {
            foreach ($this->observers as $observer){
                $observer->update(end($this->mensagem));
            }
        }

        public function addMensagem(string $mensagem): void
        {
            $this->mensagem[] = $mensagem;
            $this->notifyObservers();
        }
    }