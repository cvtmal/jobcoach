declare module 'alpinejs' {
    interface Alpine {
        start(): void;
        data(name: string, callback: () => unknown): void;
        directive(name: string, callback: () => unknown): void;
        magic(name: string, callback: () => unknown): void;
        store(name: string, value: unknown): void;
        plugin(callback: () => unknown): void;
        version: string;
    }
    
    const Alpine: Alpine;
    export = Alpine;
}