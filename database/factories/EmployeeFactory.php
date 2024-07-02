<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $knowledge = [];
        while (count($knowledge) < 3) {
          $tools = fake()->randomElement(['Linux', 'Windows', 'InDesign', 'AEM', 'Drupal', 'Wordpress', 'Shopify', 'SEO', 'UI/UX Design', 'Photoshop', 'Jira', 'Test']);
          if (!in_array($tools, $knowledge)){
            $knowledge[] = $tools;
          }            
        }

        $role = fake()->randomElement(['Web Developer', 'Backend Developer', 'Frontend Developer', 'Team Leader', 'Fullstack Developer']);
        $email = fake()->unique()->safeEmail();
        $avatar = "https://i.pravatar.cc/500?u=" . $email;
  
        return [
            'name' => fake()->firstName(). " " . fake()->lastName(),
            'phone' => fake()->phoneNumber(),
            'email' => $email,
            'profile_img' => $avatar,
            'knowledge' => implode(', ',$knowledge),
            'experience' => fake()->numberBetween(1, 15),
            'role' => $role,
        ];
    }
}
