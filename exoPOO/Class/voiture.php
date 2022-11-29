<?php


class Car{
    public function __construct(
        private string $modele,
        private string $marque,
        private string $couleur,
        private int $compteur,
        private bool $demarrer,
        private string $carburant,
        private string $puissance,
        private string $virage
    ){}

    





        /**
         * Get the value of modele
         */
        public function getModele()
        {
                return $this->modele;
        }

        /**
         * Set the value of modele
         */
        public function setModele($modele): self
        {
                $this->modele = $modele;

                return $this;
        }

        /**
         * Get the value of marque
         */
        public function getMarque()
        {
                return $this->marque;
        }

        /**
         * Set the value of marque
         */
        public function setMarque($marque): self
        {
                $this->marque = $marque;

                return $this;
        }

        /**
         * Get the value of couleur
         */
        public function getCouleur()
        {
                return $this->couleur;
        }

        /**
         * Set the value of couleur
         */
        public function setCouleur($couleur): self
        {
                $this->couleur = $couleur;

                return $this;
        }

        /**
         * Get the value of compteur
         */ 
        public function getCompteur()
        {
                return $this->compteur;
        }

        /**
         * Set the value of compteur
         *
         * @return  self
         */ 
        public function setCompteur($compteur)
        {
                $this->compteur = $compteur;

                return $this;
        }

        /**
         * Get the value of demarrer
         */
        public function getDemarrer()
        {
                return $this->demarrer;
        }

        /**
         * Set the value of demarrer
         */
        public function setDemarrer($demarrer): self
        {
                $this->demarrer = $demarrer;

                return $this;
        }

        /**
         * Get the value of carburant
         */
        public function getCarburant()
        {
                return $this->carburant;
        }

        /**
         * Set the value of carburant
         */
        public function setCarburant($carburant): self
        {
                $this->carburant = $carburant;

                return $this;
        }

        /**
         * Get the value of puissance
         */
        public function getPuissance()
        {
                return $this->puissance;
        }

        /**
         * Set the value of puissance
         */
        public function setPuissance($puissance): self
        {
                $this->puissance = $puissance;

                return $this;
        }

         /**
         * Get the value of virage
         */
        public function getVirage()
        {
                return $this->virage;
        }

        /**
         * Set the value of virage
         */
        public function setVirage($virage): self
        {
                $this->virage = $virage;

                return $this;
        }


        public function demarrer($etat)
    {
        $this->demarrer = $etat;

    }

    public function accelerer(int $vitesse)
    {
        if($this->demarrer=true){
            $this->compteur=$vitesse;
        }
    }

    public function freiner(int $frein)
    {
        if($this->compteur > $frein){
            $this->compteur = $frein;
        }
    }

    public function tourner(string $turn)
    { 
        $this->virage = $turn;
        
    }


       
}
