<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250205141220 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, id_medecin_id INT NOT NULL, id_patient_id INT NOT NULL, date DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', libelle VARCHAR(100) NOT NULL, description LONGTEXT NOT NULL, INDEX IDX_8F91ABF0A1799A53 (id_medecin_id), INDEX IDX_8F91ABF0CE0312AE (id_patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE medecin (id INT AUTO_INCREMENT NOT NULL, prenom VARCHAR(100) NOT NULL, nom VARCHAR(100) NOT NULL, matricule VARCHAR(100) NOT NULL, specialite VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE prescription (id INT AUTO_INCREMENT NOT NULL, id_medecin_id INT NOT NULL, id_patient_id INT NOT NULL, nom_medicament VARCHAR(100) NOT NULL, posologie VARCHAR(255) NOT NULL, date_immutable DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', date_de_fin DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', INDEX IDX_1FBFB8D9A1799A53 (id_medecin_id), INDEX IDX_1FBFB8D9CE0312AE (id_patient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0A1799A53 FOREIGN KEY (id_medecin_id) REFERENCES medecin (id)');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0CE0312AE FOREIGN KEY (id_patient_id) REFERENCES patient (id)');
        $this->addSql('ALTER TABLE prescription ADD CONSTRAINT FK_1FBFB8D9A1799A53 FOREIGN KEY (id_medecin_id) REFERENCES medecin (id)');
        $this->addSql('ALTER TABLE prescription ADD CONSTRAINT FK_1FBFB8D9CE0312AE FOREIGN KEY (id_patient_id) REFERENCES patient (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0A1799A53');
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0CE0312AE');
        $this->addSql('ALTER TABLE prescription DROP FOREIGN KEY FK_1FBFB8D9A1799A53');
        $this->addSql('ALTER TABLE prescription DROP FOREIGN KEY FK_1FBFB8D9CE0312AE');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE medecin');
        $this->addSql('DROP TABLE prescription');
    }
}
