<?

class Livre
{ 

    private string $titre;
    private int $anparu;
    private int $nbpage;
    private int $prix;
    private string $auteur;

    public function __construct($titre, $anparu, $nbpage, $prix, $auteur)
    {
        $this->titre = $titre;
        $this->anparu = $anparu;
        $this->nbpage = $nbpage;
        $this->prix = $prix;
        $this-> auteur = $auteur;
        $auteur->ajouterLivre($this);

    }

    public function getTitre()
    {
        return $this->titre;
    }
    public function getAnparu()
    {
        return $this->anparu;
    }
    public function getNbPage()
    {
        return $this->nbpage;
    }
    public function getPrix()
    {
        return $this->prix;
    }

    public function setTitre($titre)
    {
        $this->titre = $titre;
    }
    public function setAnparu($anparu)
    {
        $this->anparu = $anparu;
    }
    public function setNbPage($nbpage)
    {
        $this->nbpage = $nbpage;
    }
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    public function __toString()
    {
        return $this->titre . " (" . $this->anparu . ")  : " . $this->nbpage . " pages  / " . $this->prix . " € ";
    }
}