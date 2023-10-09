<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231009123229 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE allergens (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE allergen_recipes (allergens_id INT NOT NULL, recipes_id INT NOT NULL, UNIQUE INDEX UNIQ_695F197E711662F1 (allergens_id), UNIQUE INDEX UNIQ_695F197EFDF2B1FA (recipes_id), PRIMARY KEY(allergens_id, recipes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE diets (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE diet_recipes (diets_id INT NOT NULL, recipes_id INT NOT NULL, UNIQUE INDEX UNIQ_539AB8E99B4CB3A8 (diets_id), UNIQUE INDEX UNIQ_539AB8E9FDF2B1FA (recipes_id), PRIMARY KEY(diets_id, recipes_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ingredients (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(150) NOT NULL, quantity INT DEFAULT NULL, unity VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE recipes (id INT AUTO_INCREMENT NOT NULL, ingredients_id INT NOT NULL, steps_id INT NOT NULL, reviews_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, preparation_time INT DEFAULT NULL, break_time INT DEFAULT NULL, cooking_time INT DEFAULT NULL, INDEX IDX_A369E2B53EC4DCE (ingredients_id), INDEX IDX_A369E2B51EBBD054 (steps_id), INDEX IDX_A369E2B58092D97F (reviews_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reviews (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(120) NOT NULL, comment LONGTEXT NOT NULL, rate INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE steps (id INT AUTO_INCREMENT NOT NULL, description LONGTEXT NOT NULL, order_number INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, reviews_id INT DEFAULT NULL, last_name VARCHAR(50) NOT NULL, first_name VARCHAR(50) NOT NULL, user_name VARCHAR(120) NOT NULL, role JSON NOT NULL, INDEX IDX_1483A5E98092D97F (reviews_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_diets (users_id INT NOT NULL, diets_id INT NOT NULL, UNIQUE INDEX UNIQ_C23FF0FE67B3B43D (users_id), UNIQUE INDEX UNIQ_C23FF0FE9B4CB3A8 (diets_id), PRIMARY KEY(users_id, diets_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_allergens (users_id INT NOT NULL, allergens_id INT NOT NULL, UNIQUE INDEX UNIQ_6717125067B3B43D (users_id), UNIQUE INDEX UNIQ_67171250711662F1 (allergens_id), PRIMARY KEY(users_id, allergens_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', available_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE allergen_recipes ADD CONSTRAINT FK_695F197E711662F1 FOREIGN KEY (allergens_id) REFERENCES allergens (id)');
        $this->addSql('ALTER TABLE allergen_recipes ADD CONSTRAINT FK_695F197EFDF2B1FA FOREIGN KEY (recipes_id) REFERENCES recipes (id)');
        $this->addSql('ALTER TABLE diet_recipes ADD CONSTRAINT FK_539AB8E99B4CB3A8 FOREIGN KEY (diets_id) REFERENCES diets (id)');
        $this->addSql('ALTER TABLE diet_recipes ADD CONSTRAINT FK_539AB8E9FDF2B1FA FOREIGN KEY (recipes_id) REFERENCES recipes (id)');
        $this->addSql('ALTER TABLE recipes ADD CONSTRAINT FK_A369E2B53EC4DCE FOREIGN KEY (ingredients_id) REFERENCES ingredients (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipes ADD CONSTRAINT FK_A369E2B51EBBD054 FOREIGN KEY (steps_id) REFERENCES steps (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipes ADD CONSTRAINT FK_A369E2B58092D97F FOREIGN KEY (reviews_id) REFERENCES reviews (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E98092D97F FOREIGN KEY (reviews_id) REFERENCES reviews (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_diets ADD CONSTRAINT FK_C23FF0FE67B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE user_diets ADD CONSTRAINT FK_C23FF0FE9B4CB3A8 FOREIGN KEY (diets_id) REFERENCES diets (id)');
        $this->addSql('ALTER TABLE user_allergens ADD CONSTRAINT FK_6717125067B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE user_allergens ADD CONSTRAINT FK_67171250711662F1 FOREIGN KEY (allergens_id) REFERENCES allergens (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE allergen_recipes DROP FOREIGN KEY FK_695F197E711662F1');
        $this->addSql('ALTER TABLE allergen_recipes DROP FOREIGN KEY FK_695F197EFDF2B1FA');
        $this->addSql('ALTER TABLE diet_recipes DROP FOREIGN KEY FK_539AB8E99B4CB3A8');
        $this->addSql('ALTER TABLE diet_recipes DROP FOREIGN KEY FK_539AB8E9FDF2B1FA');
        $this->addSql('ALTER TABLE recipes DROP FOREIGN KEY FK_A369E2B53EC4DCE');
        $this->addSql('ALTER TABLE recipes DROP FOREIGN KEY FK_A369E2B51EBBD054');
        $this->addSql('ALTER TABLE recipes DROP FOREIGN KEY FK_A369E2B58092D97F');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E98092D97F');
        $this->addSql('ALTER TABLE user_diets DROP FOREIGN KEY FK_C23FF0FE67B3B43D');
        $this->addSql('ALTER TABLE user_diets DROP FOREIGN KEY FK_C23FF0FE9B4CB3A8');
        $this->addSql('ALTER TABLE user_allergens DROP FOREIGN KEY FK_6717125067B3B43D');
        $this->addSql('ALTER TABLE user_allergens DROP FOREIGN KEY FK_67171250711662F1');
        $this->addSql('DROP TABLE allergens');
        $this->addSql('DROP TABLE allergen_recipes');
        $this->addSql('DROP TABLE diets');
        $this->addSql('DROP TABLE diet_recipes');
        $this->addSql('DROP TABLE ingredients');
        $this->addSql('DROP TABLE recipes');
        $this->addSql('DROP TABLE reviews');
        $this->addSql('DROP TABLE steps');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE user_diets');
        $this->addSql('DROP TABLE user_allergens');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
