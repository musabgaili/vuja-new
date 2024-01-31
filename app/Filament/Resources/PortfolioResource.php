<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioResource\Pages;
use App\Filament\Resources\PortfolioResource\RelationManagers;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Set;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mvenghaus\FilamentPluginTranslatableInline\Forms\Components\TranslatableContainer;
use Illuminate\Support\Str;

class PortfolioResource extends Resource
{
    use Translatable;
    protected static ?string $model = Portfolio::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Site View';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Main Details')->schema([
                    TextInput::make('slug')
                    ->required()
                    ->maxLength(255)
                    ->rules(['alpha_dash'])
                    // ->hidden()
                    // ->unique(ignoreRecord: true)
                    ,

                    TranslatableContainer::make(
                        TextInput::make("title")->required(),
                    )->live(debounce: 1200) // Method 1: Pass a debounce value here
                    ->afterStateUpdated(function (Set $set, $state, $context) {
                        if ($context === 'edit') {
                            return;
                        }
                        $set('slug', Str::slug($state['en']));
                    }),

                    TranslatableContainer::make(
                        TagsInput::make("category")->required(),
                    ),

                    TranslatableContainer::make(
                        TagsInput::make("team"),
                    )->onlyMainLocaleRequired(),
                ])->columnSpan(1),
                Section::make("")->schema([
                    TranslatableContainer::make(
                        TextInput::make("client"),
                    )->onlyMainLocaleRequired(),
                    TranslatableContainer::make(
                        MarkdownEditor::make("content"),
                    ),
                ])->columnSpan(1),
                Section::make("")->schema([
                    Toggle::make("published"),
                    FileUpload::make("thumbnail")->directory('portfolios'),
                ])->columnSpan(1),

            ])->columns(2);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // TranslatableContainer::make(
                    ImageColumn::make('thumbnail')->width(0)->height(0),
                TextColumn::make("title"),
                // ),
                ToggleColumn::make("published"),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPortfolios::route('/'),
            'create' => Pages\CreatePortfolio::route('/create'),
            'edit' => Pages\EditPortfolio::route('/{record}/edit'),
        ];
    }
}
