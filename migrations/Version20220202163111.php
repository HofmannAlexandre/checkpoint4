<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220202163111 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE vote (id INT AUTO_INCREMENT NOT NULL, sport_id INT DEFAULT NULL, vote INT NOT NULL, INDEX IDX_5A108564AC78BCF8 (sport_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE vote ADD CONSTRAINT FK_5A108564AC78BCF8 FOREIGN KEY (sport_id) REFERENCES sport (id)');
        $this->addSql('ALTER TABLE user ADD sport_id INT DEFAULT NULL, ADD vote_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649AC78BCF8 FOREIGN KEY (sport_id) REFERENCES sport (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64972DCDAFC FOREIGN KEY (vote_id) REFERENCES vote (id)');
        $this->addSql('CREATE INDEX IDX_8D93D649AC78BCF8 ON user (sport_id)');
        $this->addSql('CREATE INDEX IDX_8D93D64972DCDAFC ON user (vote_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64972DCDAFC');
        $this->addSql('DROP TABLE vote');
        $this->addSql('ALTER TABLE sport CHANGE name name VARCHAR(30) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649AC78BCF8');
        $this->addSql('DROP INDEX IDX_8D93D649AC78BCF8 ON user');
        $this->addSql('DROP INDEX IDX_8D93D64972DCDAFC ON user');
        $this->addSql('ALTER TABLE user DROP sport_id, DROP vote_id, CHANGE name name VARCHAR(180) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE password password VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE preference preference VARCHAR(100) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
