<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200903065450 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE tenant (id INT AUTO_INCREMENT NOT NULL, tree LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE full_route (id INT AUTO_INCREMENT NOT NULL, path LONGTEXT NOT NULL COMMENT \'(DC2Type:simple_array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

        $this->addSql("INSERT INTO `tenant` VALUES (1, '1,2,3')");
        $this->addSql("INSERT INTO `tenant` VALUES (2, '1,2,4')");

        $this->addSql("INSERT INTO `full_route` VALUES (1, '1')");
        $this->addSql("INSERT INTO `full_route` VALUES (3, '1,2')");
        $this->addSql("INSERT INTO `full_route` VALUES (4, '1,3')");
        $this->addSql("INSERT INTO `full_route` VALUES (5, '1,4')");
        $this->addSql("INSERT INTO `full_route` VALUES (6, '1,5')");
        $this->addSql("INSERT INTO `full_route` VALUES (7, '1,6')");
        $this->addSql("INSERT INTO `full_route` VALUES (8, '1,7,8')");
        $this->addSql("INSERT INTO `full_route` VALUES (9, '1,7,9')");
        $this->addSql("INSERT INTO `full_route` VALUES (10, '1,7')");
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE full_route_tenant DROP FOREIGN KEY FK_33679C2370BBB0CC');
        $this->addSql('ALTER TABLE full_route_tenant DROP FOREIGN KEY FK_33679C239033212A');
        $this->addSql('DROP TABLE full_route');
        $this->addSql('DROP TABLE full_route_tenant');
        $this->addSql('DROP TABLE tenant');
    }
}