<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231010122401 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE ingredients ADD recipes_id INT NOT NULL');
        $this->addSql('ALTER TABLE ingredients ADD CONSTRAINT FK_4B60114FFDF2B1FA FOREIGN KEY (recipes_id) REFERENCES recipes (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_4B60114FFDF2B1FA ON ingredients (recipes_id)');
        $this->addSql('ALTER TABLE recipes DROP FOREIGN KEY FK_A369E2B51EBBD054');
        $this->addSql('ALTER TABLE recipes DROP FOREIGN KEY FK_A369E2B53EC4DCE');
        $this->addSql('ALTER TABLE recipes DROP FOREIGN KEY FK_A369E2B58092D97F');
        $this->addSql('DROP INDEX IDX_A369E2B53EC4DCE ON recipes');
        $this->addSql('DROP INDEX IDX_A369E2B51EBBD054 ON recipes');
        $this->addSql('DROP INDEX IDX_A369E2B58092D97F ON recipes');
        $this->addSql('ALTER TABLE recipes DROP ingredients_id, DROP steps_id, DROP reviews_id');
        $this->addSql('ALTER TABLE reviews ADD recipes_id INT NOT NULL, ADD users_id INT NOT NULL');
        $this->addSql('ALTER TABLE reviews ADD CONSTRAINT FK_6970EB0FFDF2B1FA FOREIGN KEY (recipes_id) REFERENCES recipes (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reviews ADD CONSTRAINT FK_6970EB0F67B3B43D FOREIGN KEY (users_id) REFERENCES users (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_6970EB0FFDF2B1FA ON reviews (recipes_id)');
        $this->addSql('CREATE INDEX IDX_6970EB0F67B3B43D ON reviews (users_id)');
        $this->addSql('ALTER TABLE steps ADD recipes_id INT NOT NULL');
        $this->addSql('ALTER TABLE steps ADD CONSTRAINT FK_34220A72FDF2B1FA FOREIGN KEY (recipes_id) REFERENCES recipes (id) ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_34220A72FDF2B1FA ON steps (recipes_id)');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E98092D97F');
        $this->addSql('DROP INDEX IDX_1483A5E98092D97F ON users');
        $this->addSql('ALTER TABLE users DROP reviews_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reviews DROP FOREIGN KEY FK_6970EB0FFDF2B1FA');
        $this->addSql('ALTER TABLE reviews DROP FOREIGN KEY FK_6970EB0F67B3B43D');
        $this->addSql('DROP INDEX IDX_6970EB0FFDF2B1FA ON reviews');
        $this->addSql('DROP INDEX IDX_6970EB0F67B3B43D ON reviews');
        $this->addSql('ALTER TABLE reviews DROP recipes_id, DROP users_id');
        $this->addSql('ALTER TABLE recipes ADD ingredients_id INT NOT NULL, ADD steps_id INT NOT NULL, ADD reviews_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE recipes ADD CONSTRAINT FK_A369E2B51EBBD054 FOREIGN KEY (steps_id) REFERENCES steps (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipes ADD CONSTRAINT FK_A369E2B53EC4DCE FOREIGN KEY (ingredients_id) REFERENCES ingredients (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE recipes ADD CONSTRAINT FK_A369E2B58092D97F FOREIGN KEY (reviews_id) REFERENCES reviews (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_A369E2B53EC4DCE ON recipes (ingredients_id)');
        $this->addSql('CREATE INDEX IDX_A369E2B51EBBD054 ON recipes (steps_id)');
        $this->addSql('CREATE INDEX IDX_A369E2B58092D97F ON recipes (reviews_id)');
        $this->addSql('ALTER TABLE users ADD reviews_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E98092D97F FOREIGN KEY (reviews_id) REFERENCES reviews (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_1483A5E98092D97F ON users (reviews_id)');
        $this->addSql('ALTER TABLE ingredients DROP FOREIGN KEY FK_4B60114FFDF2B1FA');
        $this->addSql('DROP INDEX IDX_4B60114FFDF2B1FA ON ingredients');
        $this->addSql('ALTER TABLE ingredients DROP recipes_id');
        $this->addSql('ALTER TABLE steps DROP FOREIGN KEY FK_34220A72FDF2B1FA');
        $this->addSql('DROP INDEX IDX_34220A72FDF2B1FA ON steps');
        $this->addSql('ALTER TABLE steps DROP recipes_id');
    }
}
