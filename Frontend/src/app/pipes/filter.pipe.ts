import { Pipe, PipeTransform } from '@angular/core';
@Pipe({
  name: 'filter'
})
export class FilterPipe implements PipeTransform {
  transform(items: any[], column:string, searchText: string): any[] {

    if(!items) return [];

    if(!searchText) return items;
	searchText = searchText.toString().toLowerCase();

	return items.filter( it => {
      return it[column].toString().toLowerCase().includes(searchText);
    });
   }
}