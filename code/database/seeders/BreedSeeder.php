<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Breed;

class BreedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $speciesIdCat = 2; // Defina o ID da espécie desejada (nesse caso, 2)
        $breedsCat = [
            'Abissínio',
            'American Bobtail',
            'American Curl',
            'American Shorthair',
            'American Wirehair',
            'Angorá',
            'Asiático',
            'Australian Mist',
            'Balinês',
            'Bengal',
            'Bobtail Japonês',
            'Bombaim',
            'British Longhair',
            'British Shorthair',
            'Burmês',
            'Burmilla',
            'Chartreux',
            'Cornish Rex',
            'Cymric',
            'Devon Rex',
            'Don Sphynx',
            'German Rex',
            'Havana',
            'Khao Manee',
            'Korat',
            'Kurilian Bobtail',
            'LaPerm',
            'Maine Coon',
            'Manx',
            'Mau Egípcio',
            'Munchkin',
            'Neva Masquerade',
            'Norueguês da Floresta',
            'Ocicat',
            'Oriental',
            'Persian',
            'Peterbald',
            'Pixiebob',
            'Ragamuffin',
            'Ragdoll',
            'Russo',
            'Sagrado da Birmânia',
            'Scottish Fold',
            'Scottish Straight',
            'Selkirk Rex',
            'Seychellois',
            'Siamês',
            'Siberiano',
            'Singapura',
            'Snowshoe',
            'Sokoke',
            'Somali',
            'Van Turco',
            'Vankedisi',
            'Desconhecido'
        ];

        $speciesIdPet = 1;
        $breedsDog = [
            'Afghn Hound',
            'Akita',
            'American Bully',
            'American Staffordshire Terrier',
            'Basenji',
            'Basset Hound',
            'Beagle',
            'Bernese',
            'Bichon Frisé',
            'Bloodhound',
            'Boiadeiro Australiano',
            'Border Collie',
            'Borzoi',
            'Boston Terrier',
            'Boxer',
            'Buldogue Francês',
            'Bull Terrier',
            'Cane Corso',
            'Cavalier King Charles Spaniel',
            'Chihuahua',
            'Chow Chow',
            'Cocker Spaniel Inglês',
            'Corgi',
            'Dachshund',
            'Dálmata',
            'Doberman',
            'Dogo Argentino',
            'Dogue Alemão',
            'Dogue de Bordeaux',
            'Fila Brasileiro',
            'Fox Paulistinha',
            'Galgo Inglês',
            'Galguinho Italiano',
            'Golden Retriever',
            'Husky Siberiano',
            'Jack Russell Terrier',
            'Labradoodle',
            'Labrador Retriever',
            'Lhasa Apso',
            'Lulu da Pomerânia',
            'Malamute do Alasca',
            'Maltês',
            'Mastiff Inglês',
            'Mastim Napolitano',
            'Mastim Tibetano',
            'Papillon',
            'Pastor Alemão',
            'Pastor Australiano',
            'Pastor Belga',
            'Pastor de Shetland',
            'Pastor do Cáucaso',
            'Pastor Maremano Abruzes',
            'Pastor Suíço',
            'Pequinês',
            'Pinscher Miniatura',
            'Pit Bull',
            'Pointer Inglês',
            'Poodle',
            'Poodle Toy',
            'Pug',
            'Rottweiler',
            'Rough Collie',
            'Samoieda',
            'São Bernardo',
            'Schnauzer',
            'Setter Irlandês',
            'Shar-pei',
            'Shiba',
            'Shih Tzu',
            'Spitz Japonês',
            'Staffordshire Bull Terrier',
            'Terra Nova',
            'Vira-Lata',
            'Weimaraner',
            'West Highland White Terrier',
            'Whippet',
            'Yorkshire Terrier',
            'Desconhecido',
        ];


        foreach ($breedsCat as $breedName) {
            // Verifica se a raça de gatos já existe na tabela
            $existingBreed = Breed::where('breed', $breedName)->where('specie_id', $speciesIdCat)->first();
        
            if (!$existingBreed) {
                // A raça de gatos ainda não existe, então podemos adicioná-la
                Breed::create(['breed' => $breedName, 'specie_id' => $speciesIdCat]);
            }
        }
        
        foreach ($breedsDog as $breedName) {
            // Verifica se a raça de cachorros já existe na tabela
            $existingBreed = Breed::where('breed', $breedName)->where('specie_id', $speciesIdPet)->first();
        
            if (!$existingBreed) {
                // A raça de cachorros ainda não existe, então podemos adicioná-la
                Breed::create(['breed' => $breedName, 'specie_id' => $speciesIdPet]);
            }
        }
    }
}
