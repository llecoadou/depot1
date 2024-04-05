namespace Kal.Model
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    [Table("kaldb.utilisateur")]
    public partial class utilisateur
    {
        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2214:DoNotCallOverridableMethodsInConstructors")]
        public utilisateur()
        {
            animals = new HashSet<animal>();
            commandes = new HashSet<commande>();
        }

        public int ID { get; set; }

        [StringLength(32)]
        public string NOMCLI { get; set; }

        [StringLength(32)]
        public string PRENOMCLI { get; set; }

        [StringLength(50)]
        public string MAILCLI { get; set; }

        [StringLength(32)]
        public string PASSCLI { get; set; }

        [StringLength(32)]
        public string ADRCLI { get; set; }

        public int? CPCLI { get; set; }

        [StringLength(32)]
        public string VILLECLI { get; set; }

        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2227:CollectionPropertiesShouldBeReadOnly")]
        public virtual ICollection<animal> animals { get; set; }

        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2227:CollectionPropertiesShouldBeReadOnly")]
        public virtual ICollection<commande> commandes { get; set; }
    }
}
