import { Injectable } from '@angular/core';
import { Observable, of } from 'rxjs';
import { ExpenseCategory } from '../models/expense-category.model';

@Injectable({
  providedIn: 'root'
})
export class ExpenseCategoryService {
  private categories: ExpenseCategory[] = [];

  getCategories(): Observable<ExpenseCategory[]> {
    return of(this.categories);
  }

  addCategory(category: Omit<ExpenseCategory, 'id' | 'createdAt' | 'updatedAt'>): Observable<ExpenseCategory> {
    const newCategory: ExpenseCategory = {
      ...category,
      id: Date.now().toString(),
      createdAt: new Date(),
      updatedAt: new Date()
    };
    this.categories.push(newCategory);
    return of(newCategory);
  }

  updateCategory(id: string, category: Partial<ExpenseCategory>): Observable<ExpenseCategory | null> {
    const index = this.categories.findIndex(c => c.id === id);
    if (index === -1) return of(null);
    
    this.categories[index] = {
      ...this.categories[index],
      ...category,
      updatedAt: new Date()
    };
    return of(this.categories[index]);
  }

  deleteCategory(id: string): Observable<boolean> {
    const index = this.categories.findIndex(c => c.id === id);
    if (index === -1) return of(false);
    
    this.categories.splice(index, 1);
    return of(true);
  }
}
