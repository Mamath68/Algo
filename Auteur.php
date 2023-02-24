<?
 
class Auteur
{

    private string $prenom;
    private string $nom;
    private array $livres;

    public function __construct($prenom, $nom)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->livres = [];
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function ajouterLivre($livres)
    {
        $this->livres[] = $livres;
    }

    public function afficherBibliographie()
    {
        echo "<h1>Livres de " . $this->prenom . " " . $this->nom."</h1>";
        foreach ($this->livres as $value) {
            echo "<p>".$value."<p>";
        }
    }
    public function __toString()
    {
        return $this->prenom . " " . $this->nom;
    }
}