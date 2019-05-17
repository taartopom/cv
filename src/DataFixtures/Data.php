<?php

namespace App\DataFixtures;

class Data
{
	const PROFILE = [
		'firstname' => 'Sandra',
		'lastname' => 'Vanhove',
		'email' => 'vsvanhove@orange.fr',
		'address' => '7, Allée des Coutilliers',
		'zipcode' => '59700',
		'city' => 'Marcq-en-Barœul',
		'mobile' => '06 72 76 43 66',
		'website' => '',
		'profession' => 'Développeuse conceptrise web',
		'shortDescription' => 'Développeuse <span>Web</span>, <span>Mobile</span> et <span>Application</span>.<br> <a class="smoothscroll" href="#about">Scrollez</a> pour en savoir plus <a class="smoothscroll" href="#about">sur moi</a>.',
		'longDescription' => '<p>Passionnée de technologie, de robotique et d\'informatique, j\'ai commencé une formation diplomante chez M2i à Villeneuve d\'ascq depuis le 25février 2019 pour le titre de concepteur développeur d\'application</a></p>',
        'social' => [
        	[
        		'className' => 'fab fa-github',
        		'title' => 'Voir mes projets sur Github',
        		'link' => 'https://github.com/taartopom'
        	],
            [
                'className' => 'fab fa-linkedin',
                'title' => 'Voir mon linkedin',
                'link' => 'https://www.linkedin.com/in/sandra-vanhove-9427b515b/'
            ]
        ],
        'experiences' => [
            [
                'company' => 'Webdealauto',
                'jobName' => 'Chargée de clientèle',
                'startDate' => '2015-03-25',
                'endDate' => null,
                'city' => 'Villeneuve d\'Ascq',
                'description' => 'Recherche de pièces auto, gestion des commandes, des litiges transport et SAV',
            ], 
            [
                'company' => 'M2i',
                'jobName' => 'Développeur web',
                'startDate' => '2019-02-25',
                'endDate' => '2019-10-11',
                'city' => 'Villeneuve d\'Ascq',
                'description' => 'Formation pour apprendre le métier de développeur web et application mobile',
            ]
        ],
        'formations' => [
             [
                'place' => 'M2i',
                'degree' => 'Concepteur développeur d\'application',
                'startDate' => '2019-02-25',
                'endDate' => null,
                'city' => 'Villeneuve d\'Ascq',
                'description' => 'Formation en cours se terminant le 11 octobre 2019 pour passé un BAC +4 de Concepteur développeur d\'application',
            ], 
            [
                'place' => 'Openclassroom',
                'degree' => 'Certificat HTML5 et CSS3',
                'startDate' => '2018-04-01',
                'endDate' => null,
                'city' => 'Mon domicile',
                'description' => 'Formation en autodidacte',
            ], 
            [
                'place' => 'Lycée des Flandres',
                'degree' => 'Baccalauréat professionnel Maintenance des véhicules particuliers ',
                'startDate' => '2008-01-01',
                'endDate' => null,
                'city' => 'Hazebrouck',
                'description' => '',
            ], 
            [
                'place' => 'Lycée des Flandres',
                'degree' => 'Brevet d\'étude professionnel Maintenance des véhicules particuliers',
                'startDate' => '2006-01-01',
                'endDate' => null,
                'city' => 'Hazebrouck',
                'description' => '',
            ] 
        ],
        'skills' => [
            ['name' => 'PHP7', 'percentage' => 20],
            ['name' => 'Symfony 3/4', 'percentage' => 20],
            ['name' => 'HTML5 / CSS3 ', 'percentage' => 50],
            ['name' => 'jQuery', 'percentage' => 20],
            ['name' => 'JavaScript', 'percentage' => 20],
            ['name' => 'Angular / Ionic', 'percentage' => 10],
            ['name' => 'MySQL', 'percentage' => 20],
            ['name' => 'Big data', 'percentage' => 10],
            ['name' => 'Java', 'percentage' => 20],
        ],
        'works' => [
            [
                'title'         =>  'Kokoro-team',
                'description'   =>  'Développement sous Symfony d\'un site de prensentation pour un groupe de youtubers spécialisé dans les mangas',
                'cover'       =>  'Kokoro-team.jpg',
                'link'           =>  'http://shika.alwaysdata.net/'
            ]
        ]
	];
}
