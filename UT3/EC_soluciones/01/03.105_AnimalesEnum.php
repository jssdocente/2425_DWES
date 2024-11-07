<?php

namespace UT3\EC01\N105;

//region Enums Definitions
use Override;

enum AnimalSexoEm: int {
    case MACHO = 1;
    case HEMBRA = 2;

    public function isMacho(): bool {
        return $this == self::MACHO;
    }
}

enum HabitatEm: int {
    case AGUA = 1;
    case TIERRA = 2;
    case AIRE = 3;
}

//endregion

//region Interfaces
interface IClonar {
    public function clonar(): object;
}

interface IMascota {
    public function acariciar(): string;

    public function jugar(): string;
}

//endregion

//region Clases Animales
abstract class Animal {

    public readonly string $name;
    public readonly AnimalSexoEm $sexo;
    public readonly HabitatEm $habitat;

    public function __construct(string $name, AnimalSexoEm $sexo, HabitatEm $habitat) {
        $this->name = $name;
        $this->sexo = $sexo;
        $this->habitat = $habitat;
    }

    public abstract function emitirSonido(): string;

    public function __toString(): string {
        return "$this->name de $this->sexo años, ";
    }


}

//region Mamiferos y Aves
abstract class Mamifero extends Animal {

    public readonly int $numeroPatas;
    public readonly string $raza;

    public abstract function amamantar(): void;

    public function __construct(string $name, AnimalSexoEm $sexo, HabitatEm $habitat, int $numeroPatas, string $raza) {
        parent::__construct($name, $sexo, $habitat);
        $this->numeroPatas = $numeroPatas;
        $this->raza = $raza;
    }

    public function __toString(): string {
        return parent::__toString() . "Mamífero $this->name de raza $this->raza, ";
    }

}

abstract class Ave extends Animal {

    public readonly string $especie;
    public readonly string $colorPlumaje;

    public function __construct(string $name, AnimalSexoEm $sexo, HabitatEm $habitat, string $especie, string $colorPlumaje) {
        parent::__construct($name, $sexo, $habitat);
        $this->especie = $especie;
        $this->colorPlumaje = $colorPlumaje;
    }

    public abstract function volar(): void;

    public function __toString(): string {
        return parent::__toString() . "Ave $this->name de especie $this->especie";
    }
}

//endregion
//endregion

//region Mamiferos
final class Perro extends Mamifero implements IMascota, IClonar {

    public function __construct(string $name, AnimalSexoEm $sexo, string $raza) {
        parent::__construct($name, $sexo, HabitatEm::TIERRA, 4, $raza);
    }

    public function emitirSonido(): string {
        return "Guau guau";
    }

    #[Override] public function amamantar(): void {
        echo "Perro amamanta";
    }

    public function __toString(): string {
        return parent::__toString() . "Perro $this->name de raza $this->raza";
    }

    //region IMascota
    #[Override] public function acariciar(): string {
        return "Acariando al perro";
    }

    #[Override] public function jugar(): string {
        return "Jugando con el perro";
    }

    //endregion

    public function clonar(): object {
        return new Perro($this->name, $this->sexo, $this->raza);
    }
}

final class Gato extends Mamifero {

    public function __construct(string $name, AnimalSexoEm $sexo, string $raza) {
        parent::__construct($name, $sexo, HabitatEm::TIERRA, 4, $raza);
    }

    public function emitirSonido(): string {
        return "Miau miau";
    }

    #[Override] public function amamantar(): void {
        echo "Gato amamanta";
    }

    public function __toString(): string {
        return parent::__toString() . "Gato $this->name de raza $this->raza";
    }
}

//endregion

//region Aves
final class Canario extends Ave implements IMascota {

    public function __construct(string $name, AnimalSexoEm $sexo, string $especie, string $colorPlumaje) {
        parent::__construct($name, $sexo, HabitatEm::AIRE, $especie, $colorPlumaje);
    }

    public function emitirSonido(): string {
        return "Canario canta";
    }

    #[Override] public function volar(): void {
        echo "Canario prácticamente no vuela";
    }

    public function __toString(): string {
        return parent::__toString() . "Canario $this->name de color $this->colorPlumaje";
    }

    //region IMascota
    #[Override] public function acariciar(): string {
        return "no-posible";
    }

    #[Override] public function jugar(): string {
        return "no-posible";
    }
}

final class Pinguino extends Ave implements IClonar {

    public function __construct(string $name, AnimalSexoEm $sexo, string $especie, string $colorPlumaje) {
        parent::__construct($name, $sexo, HabitatEm::AGUA, $especie, $colorPlumaje);
    }

    public function emitirSonido(): string {
        return "Pingüino grazna";
    }

    public function volar(): void {
        echo "Pingüino no vuela";
    }

    public function __toString(): string {
        return parent::__toString() . "Pingüino $this->name de color $this->colorPlumaje";
    }

    public function clonar(): object {
        return new Pinguino($this->name, $this->sexo, $this->especie, $this->colorPlumaje);
    }
}

//endregion

$perro = new Perro("Toby", AnimalSexoEm::HEMBRA, "Pastor Alemán");
echo "Un Perro $perro->raza emite sonido {$perro->emitirSonido()} y viven en {$perro->habitat->name}" . '<br>';

$gato = new Gato("Garfield", AnimalSexoEm::MACHO, "Siamés");
echo "Un Gato $gato->raza emite sonido {$gato->emitirSonido()} y viven en {$gato->habitat->name}" . '<br>';

$canario = new Canario("Piolín", AnimalSexoEm::HEMBRA, "Canario", "Amarillo");
echo "Un Canario $canario->especie emite sonido {$canario->emitirSonido()} y viven en {$canario->habitat->name}" . '<br>';

$pinguino = new Pinguino("Tux", AnimalSexoEm::MACHO, "Pingüino", "Blanco y Negro");
echo "Un Pingüino $pinguino->especie emite sonido {$pinguino->emitirSonido()} y viven en {$pinguino->habitat->name}" . '<br>';





