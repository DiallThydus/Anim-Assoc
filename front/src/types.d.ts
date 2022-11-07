export interface Animal {
    id: number;
    name: string;
    age: number;
    colors: string[];
    sexe: number;
    race: string;
    pictures: string;
    category_id: number;
    date_creation: string;
    date_updated: string;
    is_adopted: number;
}

export interface Category {
    id: number;
    name: string;
}

export interface BaseUser {
    id: number;
    lastName: string;
    firstName: string;
    email: string;
    isEmailVerified: number;
    address: string;
    zipCode: string;
    city: string;
    phoneNumber: string;
    role: number;
    donation: number;
    dateCreation: string;
    dateUpdated: string;
}

export interface User {
    id: number;

    firstName: string;
    lastName: string;

    email: string;
    isEmailVerified: number;

    address: string;
    zipCode: string;
    city: string;

    phoneNumber: string;

    isAdmin: boolean;
    donation: number;

    dateCreation: string;
    dateUpdated: string;
}