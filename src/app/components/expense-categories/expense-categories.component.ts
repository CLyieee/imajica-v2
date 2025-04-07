import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { ExpenseCategory } from '../../models/expense-category.model';
import { ExpenseCategoryService } from '../../services/expense-category.service';

@Component({
  selector: 'app-expense-categories',
  templateUrl: './expense-categories.component.html',
  styleUrls: ['./expense-categories.component.scss']
})
export class ExpenseCategoriesComponent implements OnInit {
  categories: ExpenseCategory[] = [];
  categoryForm: FormGroup;
  isEditing = false;
  editingId: string | null = null;

  constructor(
    private categoryService: ExpenseCategoryService,
    private fb: FormBuilder
  ) {
    this.categoryForm = this.fb.group({
      name: ['', Validators.required],
      description: [''],
      color: ['#000000']
    });
  }

  ngOnInit(): void {
    this.loadCategories();
  }

  loadCategories(): void {
    this.categoryService.getCategories().subscribe(categories => {
      this.categories = categories;
    });
  }

  onSubmit(): void {
    if (this.categoryForm.invalid) return;

    if (this.isEditing && this.editingId) {
      this.categoryService.updateCategory(this.editingId, this.categoryForm.value)
        .subscribe(() => {
          this.resetForm();
          this.loadCategories();
        });
    } else {
      this.categoryService.addCategory(this.categoryForm.value)
        .subscribe(() => {
          this.resetForm();
          this.loadCategories();
        });
    }
  }

  editCategory(category: ExpenseCategory): void {
    this.isEditing = true;
    this.editingId = category.id;
    this.categoryForm.patchValue({
      name: category.name,
      description: category.description,
      color: category.color
    });
  }

  deleteCategory(id: string): void {
    if (confirm('Are you sure you want to delete this category?')) {
      this.categoryService.deleteCategory(id).subscribe(() => {
        this.loadCategories();
      });
    }
  }

  resetForm(): void {
    this.categoryForm.reset();
    this.isEditing = false;
    this.editingId = null;
  }
}
