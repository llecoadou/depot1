namespace Kal.Model
{
    using System;
    using System.Collections.Generic;
    using System.ComponentModel.DataAnnotations;
    using System.ComponentModel.DataAnnotations.Schema;
    using System.Data.Entity.Spatial;

    [Table("kaldb.conseil")]
    public partial class conseil
    {
        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2214:DoNotCallOverridableMethodsInConstructors")]
        public conseil()
        {
            motcles = new HashSet<motcle>();
        }

        [Key]
        public int NUMCONSEIL { get; set; }

        [StringLength(255)]
        public string DESCCONSEIL { get; set; }

        [System.Diagnostics.CodeAnalysis.SuppressMessage("Microsoft.Usage", "CA2227:CollectionPropertiesShouldBeReadOnly")]
        public virtual ICollection<motcle> motcles { get; set; }
    }
}
