<?php

return [

    /******* Main Template *******/
    'title' => 'Rapports',
    'generate_pdf' => 'Générer un fichier PDF',
    'generate_xls' => 'Générer un fichier XLS',
    'generate_xls_for_maestro' => 'Générer un fichier XLS pour Maestro',
    'report_for' => 'Rapport pour',
    'hourly' => 'par heure',
    'hourly_short' => '{1} heure|[2,*] heures',
    'daily' => 'par jour',
    'daily_short' => '{1} jours|[2,*] jourss',
    'weekly' => 'par semaine',
    'weekly_short' => '{1} semaine|[2,*] semaines',
    'monthly' => 'par mois',
    'monthly_short' => '{1} mois|[2,*] mois',
    'to' => 'à',
    'no_data_to_show' => 'Aucunes données à afficher',
    'billable_stats' => 'Statistiques pour le <b>facturable</b>',
    'payable_stats' => 'Statistiques pour le <b>payable</b>',

    /******* Time Entries *******/
    'time_entries' => [
        'report' => 'Rapport des entrées de temps',
        'grand_total' => 'Grand Total',
    ],

    /******* Employees *******/
    'employees' => [
        'showing_stats' => 'Affichage des statistiques des <b>employés</b> de <b>:start_date</b> à <b>:end_date</b>',
        'num_employees' => '<b>employés</b> dans ce rapport',
        'worked_hours' => '<b>heures</b> travaillées',
        'cost_from_labour' => 'coûts de la <b>main d\'oeuvre</b>',
        'cost_from_fees' => 'coûts des <b>frais</b>',
        'cost_from_bonuses' => 'coûts des <b>primes</b>',
        'billed_hours' => '<b>heures</b> facturées',
        'billed_labour' => '<b>main d\'oeuvre</b> facturée',
        'billed_fees' => '<b>frais</b> facturés',
        'paid_hours' => '<b>heures</b> payées',
        'paid_labour' => '<b>main d\'oeuvre</b> payée',
        'paid_bonuses' => '<b>primes</b> payées',
        'info' => 'Info',
        'listing_employees' => 'Liste des employés',
        'worked_time' => 'Temps travaillé',
        'employees_report' => 'Rapport des employés',
        'employees_report_maestro' => 'Rapport des employés pour Maestro',
        'hours' => 'Heures',
        'regular' => 'Régulières',
        'overtime' => 'Supplémentaires',
        'total' => 'Total',
        'costs' => 'Coûts',
        'price' => 'Prix',
        'labour' => 'Main d\'oeuvre',
        'bonuses' => 'Primes',
        'fees' => 'Frais',
        'fees_bonuses' => 'Frais / Primes',
        'date' => 'Date',
        'project' => 'Projet',
        'task' => 'Tâche',
        'name' => 'Nom',
        'profession' => 'Profession',
        'profession_price_reg' => 'Prix reg.',
        'profession_price_over' => 'Prix sup.',
        'reg_time' => 'Temps reg',
        'over_time' => 'Temps sup',
        'bill_time' => 'Temps Fact.',
        'bill_over_time' => 'Temps Fact. Sup.',
        'paid_time' => 'Temps Payé',
        'paid_over_time' => 'Temps Payé Sup.',
        'labour_cost' => 'Coûts main d\'oeuvre',
        'fees_cost' => 'Coûts frais',
        'bonuses_cost' => 'Coûts primes',
        'fees_bonuses_cost' => 'Coûts frais / primes',
        'time' => 'Temps',
        'time_in' => 'Heure de début',
        'time_out' => 'Heure de fin',
        'reg' => 'Reg.',
        'over' => 'Sup.',
        'employee_no_work' => 'Cet employé n\'a pas travaillé durant cette période.',
        'ccq?' => 'CCQ?',
        'transport_time' => 'Transport (Temps)',
        'transport_cost' => 'Transport (Coûts)',
        'time_entries' => 'Entrées de temps',
        'time_entry' => 'Entrée de temps',
        'forms' => 'Formulaires',
        'form' => 'Formulaire',
        'date_in' => 'Date de début',
        'date_out' => 'Date de fin',
        'date_filled' => 'Date rempli',
        'form_type' => 'Type',
        'type' => 'Type',
        'employee_no_work' => 'Cet employé n\'a pas rempli de formulaires durant cette période.',
    ],

    /******* Tasks *******/
    'tasks' => [
        'showing_stats' => 'Affichage des statistiques des <b>tâches</b> de <b>:start_date</b> à <b>:end_date</b>',
        'num_tasks' => '<b>tâches</b> dans ce rapport',
        'worked_hours' => '<b>heures</b> travaillées',
        'cost_from_labour' => 'coûts de la <b>main d\'oeuvre</b>',
        'cost_from_fees' => 'coûts des <b>frais</b>',
        'listing_tasks' => 'Liste des tâches',
        'worked_time' => 'Temps travaillé',
        'tasks_report' => 'Rapport des tâches',
        'hours' => 'Heures',
        'regular' => 'Régulières',
        'overtime' => 'Supplémentaires',
        'total' => 'Total',
        'costs' => 'Coûts',
        'price' => 'Prix',
        'labour' => 'Main d\'oeuvre',
        'fees' => 'Frais',
        'date' => 'Date',
        'employee' => 'Employé',
        'project' => 'Projet',
        'task' => 'Tâche',
        'name' => 'Nom',
        'profession' => 'Profession',
        'profession_price_reg' => 'Prix reg.',
        'profession_price_over' => 'Prix sup.',
        'reg_time' => 'Temps reg',
        'over_time' => 'Temps sup',
        'labour_cost' => 'Coûts main d\'oeuvre',
        'fees_cost' => 'Coûts frais',
        'time' => 'Temps',
        'reg' => 'Reg.',
        'over' => 'Sup.',
        'no_data' => 'Il n\'y a pas de données pour cette tâche durant cette période.',
    ],

    /******* Projects *******/
    'projects' => [
        'showing_stats' => 'Affichage des statistiques des <b>projets</b> de <b>:start_date</b> à <b>:end_date</b>',
        'cost_general_information' => 'Informations des <b>coûts</b>',
        'cost_detailed_information' => 'Coûts <b>détaillés</b>',
        'num_projects' => '<b>projets</b> dans ce rapport',
        'reg_worked_hours' => '<b>heures</b> tavaillées <b>reg.</b>',
        'over_worked_hours' => '<b>heures</b> tavaillées <b>sup.</b>',
        'total_cost' => 'coût <b>total</b>',
        'approved_cost' => 'coût <b>approuvé</b>',
        'unapproved_cost' => 'coût <b>non approuvé</b>',
        'cost_from_equipment' => 'coût de <b>l\'équipement</b>',
        'cost_from_materials' => 'coût du <b>matériel</b>',
        'cost_from_others' => 'coût <b>autres</b>',
        'listing_projects' => 'Liste des projets',
        'report_for' => 'Rapport pour',
        'labour_and_fees_report' => 'Rapport pour <b>main d\'oeuvre et frais</b>',
        'equipment_report' => 'Rapport de <b>l\'équipement</b>',
        'materials_report' => 'Rapport des <b>matériaux</b>',
        'others_report' => 'Rapport <b>autres</b>',
        'others' => 'Autres',
        'projects_report' => 'Rapport des projets',
        'equipment' => 'Équipement',
        'materials' => 'Matériaux',
        'work_order' => 'Ordre de Travail',
        'no_data' => 'Il n\'y a pas de données pour ce projet durant cette période.',
        'worked_hours' => '<b>heures</b> travaillées',
        'cost_from_labour' => 'coûts de la <b>main d\'oeuvre</b>',
        'cost_from_fees' => 'coûts des <b>frais</b>',
        'worked_time' => 'Temps travaillé',
        'employees_report' => 'Rapport des employés',
        'hours' => 'Heures',
        'regular' => 'Régulières',
        'overtime' => 'Supplémentaires',
        'total' => 'Total',
        'costs' => 'Coûts',
        'price' => 'Prix',
        'labour' => 'Main d\'oeuvre',
        'fees' => 'Frais',
        'date' => 'Date',
        'project' => 'Projet',
        'task' => 'Tâche',
        'profession' => 'Profession',
        'reg_time' => 'Temps reg',
        'over_time' => 'Temps sup',
        'labour_cost' => 'Coûts main d\'oeuvre',
        'fees_cost' => 'Coûts frais',
        'time' => 'Temps',
        'reg' => 'Reg.',
        'over' => 'Sup.',
        'supervision_projects_data' => 'Données pour projets supervision',
        'ratio' => 'Ratio',
        'supervision_hours' => 'Heures Supervision',
    ],

    /******* Equipment *******/
    'equipment' => [
        'showing_stats' => 'Affichage des statistiques des <b>équipment</b> de <b>:start_date</b> à <b>:end_date</b>',
        'num_equipment' => '<b>équipment</b> dans ce rapport',
        'used_number' => '<b>quantité</b> utilisé',
        'total_cost' => '<b>coûts</b> totaux',
        'listing_equipment' => 'Liste des équipement',
        'work_order_number' => 'Ordre de travail',
        'equipment_report' => 'Rapport des équipment',
        'hours' => 'Heures',
        'total' => 'Total',
        'costs' => 'Coûts',
        'price' => 'Prix',
        'date' => 'Date',
        'project' => 'Projet',
        'quantity' => 'Quantité',
        'time' => 'Temps',
        'name' => 'Nom',
        'time_duration' => 'Durée (temps)',
        'duration' => 'Durée',
        'no_stats' => 'Aucune statistiques pour cet équipement durant cette période.',
        'start_time' => 'Début',
        'end_time' => 'Fin',
        'fuel' => 'Carburant',
    ],

    /******* Materials *******/
    'materials' => [
        'showing_stats' => 'Affichage des statistiques des <b>matériaux</b> de <b>:start_date</b> à <b>:end_date</b>',
        'num_materials' => '<b>matériaux</b> dans ce rapport',
        'used_number' => '<b>quantité</b> utilisé',
        'total_cost' => '<b>coûts</b> totaux',
        'listing_materials' => 'Liste des matériaux',
        'work_order_number' => 'Ordre de travail',
        'materials_report' => 'Rapport des matériaux',
        'hours' => 'Heures',
        'total' => 'Total',
        'costs' => 'Coûts',
        'price' => 'Prix',
        'price_duration' => 'Durée (prix)',
        'date' => 'Date',
        'name' => 'Nom',
        'project' => 'Projet',
        'quantity' => 'Quantité',
        'time' => 'Temps',
        'time_duration' => 'Durée (temps)',
        'duration' => 'Durée',
        'no_stats' => 'Aucune statistiques pour cet équipement durant cette période.',
    ],

    /******* Purchase Orders *******/
    'purchase_orders' => [
        'showing_stats' => 'Affichage des statistiques des <b>bons de travail</b> de <b>:start_date</b> à <b>:end_date</b>',
        'num_materials' => '<b>matériaux</b> dans ce rapport',
        'used_number' => '<b>quantité</b> utilisé',
        'budget_cost' => 'coûts <b>budgetaire</b>',
        'budget_cost_unf' => 'Coût budgetaire',
        'real_cost' => 'coûts <b>réel</b>',
        'real_cost_unf' => 'Coût réel',
        'listing_purchase_orders' => 'Liste des bons de travail',
        'purchase_orders_report' => 'Rapport des bons de travail',
        'hours' => 'Heures',
        'total' => 'Total',
        'costs' => 'Coûts',
        'price' => 'Prix',
        'task' => 'Tâche',
        'type' => 'Type',
        'quantity' => 'Quantité',
        'provider' => 'Fournisseur',
        'client' => 'Client',
        'is_payable' => 'À payer',
        'is_billable' => 'Facturable',
        'yes' => 'Oui',
        'no' => 'Non',
        'approved' => 'Approuvé',
        'approved_by' => 'Approuvé par',
        'approved_date' => 'Date d\'approbation',
        'to_pay' => 'À payer',
        'item_description' => 'Description de l\'item',
        'budget_price' => 'Prix budgetaire / unité',
        'real_price' => 'Prix réel / unité',
        'date' => 'Date',
        'name' => 'Nom',
        'receipts' => 'Factures',
        'number' => 'Numéro',
        'note' => 'Note',
        'project' => 'Projet',
        'project_task' => 'Projet / Tâche',
        'quantity' => 'Quantité',
        'po_number' => '# PO',
        'no_stats' => 'Aucune statistiques pour ce bon de travail durant cette période.',
        'no_items' => 'Aucun items pour ce bon de travail.',
        'info' => 'Info',
    ]
];